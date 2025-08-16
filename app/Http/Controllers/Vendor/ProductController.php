<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Language;
use App\Models\Product;
use App\Models\ProductAttributeValue;
use App\Services\Admin\CategoryService;
use App\Services\vendor\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $categoryService;

    protected $productService;

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->middleware('auth:vendor');
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function index()
    {
        return view('vendor.products.index');
    }

    public function getProducts(Request $request)
    {
        try {
            $request->merge(['vendor_id' => auth()->guard('vendor')->id()]);

            return $this->productService->getProductsForDataTable($request);
        } catch (\Exception $e) {
            \Log::error('Error fetching vendor product data: '.$e->getMessage());

            return response()->json(['error' => 'An error occurred while fetching products.'], 500);
        }
    }

    public function create()
    {
        $languages = Language::where('active', 1)->get();
        $categories = Category::with('translations')->get();
        $brands = Brand::with('translations')->get();
        $attributes = Attribute::with('values.translations')->get();

        $sizes = Attribute::where('name', 'Size')->first()?->values ?? collect();
        $colors = Attribute::where('name', 'Color')->first()?->values ?? collect();

        $attributeSizeMap = [
            'small' => AttributeValue::where('attribute_id', $sizes->firstWhere('name', 'Small')->id ?? 0)->pluck('id')->first(),
            'medium' => AttributeValue::where('attribute_id', $sizes->firstWhere('name', 'Medium')->id ?? 0)->pluck('id')->first(),
            'large' => AttributeValue::where('attribute_id', $sizes->firstWhere('name', 'Large')->id ?? 0)->pluck('id')->first(),
        ];

        return view('vendor.products.create', compact(
            'languages', 'categories', 'brands', 'attributes', 'sizes', 'colors', 'attributeSizeMap'
        ));
    }

    public function store(Request $request)
    {
        $defaultLang = config('app.locale');
        $vendorId = Auth::guard('vendor')->id();

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'translations.'.$defaultLang.'.name' => 'required|string|max:255',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'variants' => 'required|array|min:1',
            'variants.*.name' => 'required|string|max:255',
            'variants.*.price' => 'required|numeric|min:0',
            'variants.*.discount_price' => 'nullable|numeric|min:0|lte:variants.*.price',
            'variants.*.stock' => 'required|integer|min:0',
            'variants.*.SKU' => 'required|string|max:255',
            'variants.*.barcode' => 'nullable|string|max:255',
            'variants.*.weight' => 'nullable|numeric|min:0',
            'variants.*.dimensions' => 'nullable|string|max:255',
            'variants.*.language_code' => 'nullable|string|size:2',
            'variants.*.size_id' => 'nullable|exists:attribute_values,id',
            'variants.*.color_id' => 'nullable|exists:attribute_values,id',
        ]);

        DB::transaction(function () use ($request, $defaultLang, $vendorId) {
            $slug = $this->generateUniqueSlug($request->translations[$defaultLang]['name']);

            $product = Product::create([
                'shop_id' => 1,
                'vendor_id' => $vendorId,
                'slug' => $slug,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'product_type' => 'variable',
            ]);

            foreach ($request->translations as $lang => $data) {
                $product->translations()->create([
                    'language_code' => $lang,
                    'name' => $data['name'],
                    'description' => $data['description'] ?? null,
                    'short_description' => $data['short_description'] ?? null,
                    'tags' => $data['tags'] ?? null,
                ]);
            }

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('products', 'public');
                    $product->images()->create([
                        'name' => $image->getClientOriginalName(),
                        'image_url' => $path,
                        'type' => 'thumb',
                    ]);
                }
            }

            foreach ($request->variants as $variantData) {
                $variant = $product->variants()->create([
                    'variant_slug' => Str::slug($variantData['name']).'-'.uniqid(),
                    'price' => $variantData['price'],
                    'discount_price' => $variantData['discount_price'] ?? null,
                    'stock' => $variantData['stock'],
                    'SKU' => $variantData['SKU'],
                    'barcode' => $variantData['barcode'] ?? null,
                    'weight' => $variantData['weight'] ?? null,
                    'dimensions' => $variantData['dimensions'] ?? null,
                    'is_primary' => 1,
                ]);

                $variant->translations()->create([
                    'language_code' => $variantData['language_code'] ?? $defaultLang,
                    'name' => $variantData['name'],
                ]);

                foreach (['size_id', 'color_id'] as $type) {
                    if (! empty($variantData[$type])) {
                        DB::table('product_variant_attribute_values')->insert([
                            'product_id' => $product->id,
                            'product_variant_id' => $variant->id,
                            'attribute_value_id' => $variantData[$type],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);

                        ProductAttributeValue::firstOrCreate([
                            'product_id' => $product->id,
                            'attribute_value_id' => $variantData[$type],
                        ]);
                    }
                }
            }
        });

        return redirect()->route('vendor.products.index')->with('success', __('cms.products.success_create'));
    }

    public function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $original = $slug;
        $i = 1;
        while (Product::where('slug', $slug)->exists()) {
            $slug = $original.'-'.$i++;
        }

        return $slug;
    }

    public function edit($id)
    {
        $vendorId = auth('vendor')->id();

        $product = Product::with([
            'translations',
            'images',
            'variants.translations',
            'variants.attributeValues',
        ])
            ->where('vendor_id', $vendorId)
            ->where('id', $id)
            ->firstOrFail();

        $languages = Language::where('active', 1)->get();
        $categories = Category::with('translations')->get();
        $brands = Brand::with('translations')->get();
        $attributes = Attribute::with('values.translations')->get();

        $sizes = Attribute::where('name', 'Size')->first()?->values ?? collect();
        $colors = Attribute::where('name', 'Color')->first()?->values ?? collect();

        return view('vendor.products.edit', compact(
            'product',
            'languages',
            'categories',
            'brands',
            'attributes',
            'sizes',
            'colors'
        ));
    }

    public function update(Request $request, $id)
    {
        $vendorId = Auth::guard('vendor')->id();
        $defaultLang = config('app.locale');

        $product = Product::with(['variants.translations', 'images'])->where('vendor_id', $vendorId)->findOrFail($id);

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'translations.'.$defaultLang.'.name' => 'required|string|max:255',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'variants' => 'required|array|min:1',
            'variants.*.name' => 'required|string|max:255',
            'variants.*.price' => 'required|numeric|min:0',
            'variants.*.discount_price' => 'nullable|numeric|min:0|lte:variants.*.price',
            'variants.*.stock' => 'required|integer|min:0',
            'variants.*.SKU' => 'required|string|max:255',
            'variants.*.barcode' => 'nullable|string|max:255',
            'variants.*.weight' => 'nullable|numeric|min:0',
            'variants.*.dimensions' => 'nullable|string|max:255',
            'variants.*.language_code' => 'nullable|string|size:2',
            'variants.*.size_id' => 'nullable|exists:attribute_values,id',
            'variants.*.color_id' => 'nullable|exists:attribute_values,id',
        ]);

        DB::transaction(function () use ($request, $product, $defaultLang) {
            $product->update([
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
            ]);

            foreach ($request->translations as $lang => $data) {
                $product->translations()->updateOrCreate(
                    ['language_code' => $lang],
                    [
                        'name' => $data['name'],
                        'description' => $data['description'] ?? null,
                        'short_description' => $data['short_description'] ?? null,
                        'tags' => $data['tags'] ?? null,
                    ]
                );
            }

            if ($request->has('remove_images')) {
                foreach ($request->remove_images as $imageId) {
                    $image = $product->images()->find($imageId);
                    if ($image) {
                        Storage::disk('public')->delete($image->image_url);
                        $image->delete();
                    }
                }
            }

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('products', 'public');
                    $product->images()->create([
                        'name' => $image->getClientOriginalName(),
                        'image_url' => $path,
                        'type' => 'thumb',
                    ]);
                }
            }

            $product->variants()->delete();
            DB::table('product_variant_attribute_values')->where('product_id', $product->id)->delete();
            ProductAttributeValue::where('product_id', $product->id)->delete();

            foreach ($request->variants as $variantData) {
                $variant = $product->variants()->create([
                    'variant_slug' => Str::slug($variantData['name']).'-'.uniqid(),
                    'price' => $variantData['price'],
                    'discount_price' => $variantData['discount_price'] ?? null,
                    'stock' => $variantData['stock'],
                    'SKU' => $variantData['SKU'],
                    'barcode' => $variantData['barcode'] ?? null,
                    'weight' => $variantData['weight'] ?? null,
                    'dimensions' => $variantData['dimensions'] ?? null,
                    'is_primary' => 1,
                ]);

                $variant->translations()->create([
                    'language_code' => $variantData['language_code'] ?? $defaultLang,
                    'name' => $variantData['name'],
                ]);

                foreach (['size_id', 'color_id'] as $type) {
                    if (! empty($variantData[$type])) {
                        DB::table('product_variant_attribute_values')->insert([
                            'product_id' => $product->id,
                            'product_variant_id' => $variant->id,
                            'attribute_value_id' => $variantData[$type],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);

                        ProductAttributeValue::firstOrCreate([
                            'product_id' => $product->id,
                            'attribute_value_id' => $variantData[$type],
                        ]);
                    }
                }
            }
        });

        return redirect()->route('vendor.products.index')->with('success', __('cms.products.success_update'));
    }

    public function destroy($id)
    {
        try {
            $vendorId = Auth::guard('vendor')->id();
            $product = Product::where('vendor_id', $vendorId)->findOrFail($id);

            $product->images()->delete();
            $product->variants()->delete();
            DB::table('product_variant_attribute_values')->where('product_id', $product->id)->delete();
            ProductAttributeValue::where('product_id', $product->id)->delete();

            $product->delete();

            return response()->json([
                'success' => true,
                'message' => __('cms.products.success_delete'),
            ]);
        } catch (\Exception $e) {
            \Log::error('Vendor product delete error: '.$e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while deleting the product.',
            ]);
        }
    }

    public function updateStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:products,id',
            'status' => 'required|boolean',
        ]);

        $product = Product::where('vendor_id', Auth::guard('vendor')->id())->find($request->id);
        if ($product) {
            $product->status = $request->status;
            $product->save();

            return response()->json(['success' => true, 'message' => __('cms.products.status_updated')]);
        }

        return response()->json(['success' => false, 'message' => 'Product not found or access denied.']);
    }
}
