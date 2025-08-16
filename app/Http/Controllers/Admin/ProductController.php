<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Language;
use App\Models\Product;
use App\Models\ProductAttributeValue;
use App\Models\Vendor;
use App\Services\Admin\CategoryService;
use App\Services\Admin\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $categoryService;

    protected $productService;

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function index()
    {
        return view('admin.products.index');
    }

    public function getProducts(Request $request)
    {
        try {
            return $this->productService->getProductsForDataTable($request);
        } catch (\Exception $e) {
            \Log::error('Error fetching product data: '.$e->getMessage());

            return response()->json(['error' => 'An error occurred while fetching product data.'], 500);
        }
    }

    public function create()
    {

        $vendors = Vendor::all();
      
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

        return view('admin.products.create', compact('languages', 'categories', 'brands', 'attributes', 'sizes', 'colors', 'attributeSizeMap', 'vendors'));
    }

    public function store(Request $request)
    {
        $defaultLang = config('app.locale');

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'vendor_id' => 'required|exists:vendors,id',
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

        DB::transaction(function () use ($request, $defaultLang) {
            $defaultName = $request->translations[$defaultLang]['name'] ?? 'product';
            $slug = $this->generateUniqueSlug($defaultName);

            $product = Product::create([
                'shop_id' => 1,
                'vendor_id' => $request->vendor_id,
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

            $variantIndex = 0;
            foreach ($request->variants as $variantData) {
                $variant = $product->variants()->create([
                    'variant_slug' => Str::slug($variantData['name']).'-'.uniqid(),
                    'price' => $variantData['price'],
                    'discount_price' => $variantData['discount_price'] ?? null,
                    'stock' => $variantData['stock'],
                    'SKU' => $variantData['SKU'],
                    'barcode' => $variantData['barcode'] ?? null,
                    'weight' => $variantData['weight'] ?? null,
                    'dimensions' => $variantData['dimension'] ?? null,
                    'is_primary' => 1,
                ]);

                $variant->translations()->create([
                    'language_code' => $variantData['language_code'] ?? 'en',
                    'name' => $variantData['name'],
                ]);

                if (! empty($variantData['size_id'])) {
                    DB::table('product_variant_attribute_values')->insert([
                        'product_id' => $product->id,
                        'product_variant_id' => $variant->id,
                        'attribute_value_id' => $variantData['size_id'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

                    ProductAttributeValue::firstOrCreate([
                        'product_id' => $product->id,
                        'attribute_value_id' => $variantData['size_id'],
                    ]);
                }

                if (! empty($variantData['color_id'])) {
                    DB::table('product_variant_attribute_values')->insert([
                        'product_id' => $product->id,
                        'product_variant_id' => $variant->id,
                        'attribute_value_id' => $variantData['color_id'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

                    ProductAttributeValue::firstOrCreate([
                        'product_id' => $product->id,
                        'attribute_value_id' => $variantData['color_id'],
                    ]);
                }

                $variantIndex++;
            }
        });

        return redirect()->route('admin.products.index')->with('success', __('cms.products.success_create'));
    }

    public function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (Product::where('slug', $slug)->exists()) {
            $slug = $originalSlug.'-'.$count;
            $count++;
        }

        return $slug;
    }

    public function edit($id)
    {
        $product = Product::with([
            'translations',
            'variants.translations',
            'variants.attributeValues',
            'images',
        ])->findOrFail($id);

        $vendors = Vendor::all();
        $languages = Language::where('active', 1)->get();
        $categories = Category::all();
        $brands = Brand::all();
        $attributes = Attribute::with('values.translations')->get();

        $sizes = Attribute::where('name', 'Size')->first()?->values ?? collect();
        $colors = Attribute::where('name', 'Color')->first()?->values ?? collect();

        foreach ($product->variants as $variant) {
            $size = $variant->attributeValues->firstWhere('attribute_id', $sizes->first()?->attribute_id);
            $color = $variant->attributeValues->firstWhere('attribute_id', $colors->first()?->attribute_id);

            $variant->size_id = $size?->id;
            $variant->color_id = $color?->id;
        }

        return view('admin.products.edit', compact(
            'product', 'languages', 'categories', 'brands',
            'attributes', 'sizes', 'colors', 'vendors'
        ));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $defaultLang = config('app.locale');

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'vendor_id' => 'required|exists:vendors,id',
            'translations.'.$defaultLang.'.name' => 'required|string|max:255',

            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

            'variants' => 'required|array|min:1',
            'variants.*.id' => 'nullable|exists:product_variants,id',
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
                'vendor_id' => $request->vendor_id,
            ]);

            $newAttrValueIds = collect($request->variants)
                ->flatMap(function ($v) {
                    return array_filter([$v['size_id'] ?? null, $v['color_id'] ?? null]);
                })
                ->unique()
                ->values()
                ->all();

            ProductAttributeValue::where('product_id', $product->id)
                ->whereNotIn('attribute_value_id', $newAttrValueIds)
                ->delete();

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

            foreach ($request->variants as $variantData) {
                $variant = $product->variants()->create([
                    'variant_slug' => Str::slug($variantData['name']).'-'.uniqid(),
                    'price' => $variantData['price'],
                    'discount_price' => $variantData['discount_price'] ?? null,
                    'stock' => $variantData['stock'],
                    'SKU' => $variantData['SKU'],
                    'barcode' => $variantData['barcode'] ?? null,
                    'weight' => $variantData['weight'] ?? null,
                    'dimensions' => $variantData['dimension'] ?? null,
                    'is_primary' => 1,
                ]);

                $variant->translations()->create([
                    'language_code' => $variantData['language_code'] ?? $defaultLang,
                    'name' => $variantData['name'],
                ]);

                foreach (['size_id', 'color_id'] as $attrType) {
                    if (! empty($variantData[$attrType])) {
                        DB::table('product_variant_attribute_values')->insert([
                            'product_id' => $product->id,
                            'product_variant_id' => $variant->id,
                            'attribute_value_id' => $variantData[$attrType],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);

                        ProductAttributeValue::firstOrCreate([
                            'product_id' => $product->id,
                            'attribute_value_id' => $variantData[$attrType],
                        ]);
                    }
                }
            }
        });

        return redirect()->route('admin.products.index')->with('success', __('cms.products.success_update'));
    }

    public function destroy($id)
    {
        try {
            $result = $this->productService->destroy($id);

            if ($result) {
                return response()->json([
                    'success' => true,
                    'message' => __('cms.products.success_delete'),
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Failed to delete product!',
            ]);
        } catch (\Exception $e) {
            \Log::error("Error deleting product with ID {$id}: ".$e->getMessage());

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

        $product = Product::find($request->id);
        $product->status = $request->status;
        $product->save();

        if ($product) {
            return response()->json([
                'success' => true,
                'message' => __('cms.products.status_updated'),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Product status could not be updated.',
            ]);
        }
    }
}
