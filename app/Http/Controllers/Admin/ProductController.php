<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\Language;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\ProductService;
use App\Services\Admin\CategoryService;
use Illuminate\Support\Facades\Validator;
use App\Models\Brand;
use App\Models\Attribute;
use Illuminate\Support\Facades\DB;
use App\Models\ProductTranslation;
use App\Models\ProductVariant;
use App\Models\ProductVariantTranslation;
use App\Models\ProductAttributeValue;
use App\Models\AttributeValue;


class ProductController extends Controller
{
    protected $categoryService;
    protected $productService;
  

    public function __construct(CategoryService $categoryService,ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
        
    }

    public function index()
    {
        return view('cms.admin.products.index');
    }

    public function getProducts(Request $request)
    {
        try {
            return $this->productService->getProductsForDataTable($request);
        } catch (\Exception $e) {
            \Log::error("Error fetching product data: " . $e->getMessage());
            return response()->json(['error' => 'An error occurred while fetching product data.'], 500);
        }
    }

    public function create()
    {
        $locale = app()->getLocale();

        $categories = Category::with('translation')->get();    

        $brands = Brand::with('translation')->get();
        
        $attributes = Attribute::with('values.translations')->get();

        $activeLanguages = Language::where('active', 1)->get();
  
        return view('cms.admin.products.create', compact('categories', 'brands', 'attributes', 'activeLanguages'));

    }



    /*public function store(Request $request)
    {         
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'translations' => 'required|array', 
            'translations.*.name' => 'required|string|max:255', 
            'translations.*.description' => 'nullable|string', 
        ]);

        $translations = $request->input('translations');
        $productData = $request->except('translations'); 

        if (isset($translations['en']['name'])) {
            $productData['name'] = $translations['en']['name'];  
        }

        if (!$request->has('currency')) {
            return redirect()->back()->withErrors(['currency' => 'Currency is required.'])->withInput();
        }
    

        $result = $this->productService->store($translations, $productData);

        if ($result instanceof \Illuminate\Support\MessageBag) {
            return redirect()->back()->withErrors($result)->withInput();
        }

        return redirect()->route('admin.products.index')->with('success', __('cms.products.created'));
       
    }*/

    public function store(Request $request)
    {
        /*dd($request->input('attributes'));
        dd($request->attributes);*/

        $request->validate([
            'translations' => 'required|array',
            'translations.*.name' => 'required|string',
            'translations.*.description' => 'nullable|string',
            'slug' => 'required|string|unique:products,slug',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'product_type' => 'required|in:simple,variable',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'attributes' => 'nullable|array',
            'attributes.*' => 'nullable|exists:attribute_values,id',

            // Variant validations
            'variants' => 'nullable|array',
            'variants.*.translations.*.name' => 'required_with:variants|string',
            'variants.*.price' => 'required_with:variants|numeric|min:0',
            'variants.*.stock' => 'required_with:variants|integer|min:0',
            'variants.*.SKU' => 'required_with:variants|string|unique:product_variants,SKU',
            'variants.*.barcode' => 'nullable|string',
            'variants.*.weight' => 'nullable|numeric',
            'variants.*.dimensions' => 'nullable|string',
            'variants.*.is_primary' => 'boolean',
            'variants.*.images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        DB::beginTransaction();

        try {
            // Create Product
            $product = Product::create([
                'vendor_id' => 1,
                'shop_id' => 1,
                'slug' => $request->slug,
                'category_id' => $request->category_id,
                'brand_id' => $request->brand_id,
                'product_type' => $request->product_type,
            ]);

            // Store Translations
            foreach ($request->translations as $language_code => $translation) {
                ProductTranslation::create([
                    'product_id' => $product->id,
                    'language_code' => $language_code,
                    'name' => $translation['name'],
                    'description' => $translation['description'] ?? null,
                ]);
            }

            // Store Product Images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('product_images', 'public');
                    ProductImage::create([
                        'name' => $image->getClientOriginalName(),
                        'image_url' => $imagePath,
                        'type' => 'thumb', // Default type
                        'product_id' => $product->id,
                    ]);
                }
            }

            // Store Attributes
            if ($request->has('attributes')) {
                $attributes = $request->get('attributes');
                foreach ($attributes as $attribute_id => $attribute_value_id) {
                    if (!empty($attribute_value_id)) {
                        ProductAttributeValue::create([
                            'product_id' => $product->id,
                            'attribute_value_id' => $attribute_value_id,
                        ]);
                    }
                }
            }

            // Store Variants if Product is Variable
            if ($request->product_type === 'variable' && isset($request->variants)) {
                foreach ($request->variants as $variantData) {
                    $variant = ProductVariant::create([
                        'product_id' => $product->id,
                        'variant_slug' => \Str::slug($variantData['translations']['en']['name'] ?? uniqid()),
                        'price' => $variantData['price'],
                        'discount_price' => $variantData['discount_price'] ?? null,
                        'stock' => $variantData['stock'],
                        'SKU' => $variantData['SKU'],
                        'barcode' => $variantData['barcode'] ?? null,
                        'weight' => $variantData['weight'] ?? null,
                        'dimensions' => $variantData['dimensions'] ?? null,
                        'is_primary' => isset($variantData['is_primary']) ? (bool)$variantData['is_primary'] : false,
                    ]);

                    // Store Variant Translations
                    foreach ($variantData['translations'] as $language_code => $variantTranslation) {
                        ProductVariantTranslation::create([
                            'product_variant_id' => $variant->id,
                            'language_code' => $language_code,
                            'name' => $variantTranslation['name'],
                        ]);
                    }

                    // Store Variant Images
                    if (isset($variantData['images'])) {
                        foreach ($variantData['images'] as $variantImage) {
                            $imagePath = $variantImage->store('variant_images', 'public');
                            ProductImage::create([
                                'name' => $variantImage->getClientOriginalName(),
                                'image_url' => $imagePath,
                                'type' => 'thumb', // Default type
                                'product_id' => $product->id,
                                'variant_id' => $variant->id,
                            ]);
                        }
                    }
                }
            }

            DB::commit();
            return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()]);
        }
    }



    public function edit($id)
    {
        $product = Product::with('translations', 'images')->findOrFail($id);
        
        $image = $product->images->first();
        $imageUrl = $image ? $image->image_url : '';
        
        $categories = Category::all();  
        $categories = collect($categories)->map(function ($category) {
            if (isset($category->translations) && $category->translations instanceof \Illuminate\Database\Eloquent\Collection) {
                $translation = $category->translations->firstWhere('language_code', 'en');
                $category->name = $translation ? $translation->name : 'No Name Available';
            } else {
                $category->name = 'No Name Available';
            }
            return $category;
        });

        $languages = Language::active()->get();

        return view('cms.admin.products.edit', compact('product', 'categories', 'languages', 'imageUrl'));
    }
    
    public function update(Request $request, $id)
    {                 
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'translations' => 'required|array',
            'translations.*.name' => 'required|string|max:255',
            'translations.*.description' => 'nullable|string',
        ]);

        $translations = $request->input('translations');
        $productData = $request->except('translations'); 

        if (isset($translations['en']['name'])) {
            $productData['name'] = $translations['en']['name']; 
        }

        if (!$request->has('currency')) {
            return redirect()->back()->withErrors(['currency' => 'Currency is required.'])->withInput();
        }

        $result = $this->productService->update($id, $productData, $translations);

        if ($result instanceof \Illuminate\Support\MessageBag) {
            return redirect()->back()->withErrors($result)->withInput();
        }

        return redirect()->route('admin.products.index')->with('success', __('cms.products.updated'));   
    }

    public function destroy($id)
    {
       
        try {
            $result = $this->productService->destroy($id);
    
            // Check if deletion was successful
            if ($result) {
                return response()->json([
                    'success' => true,
                    'message' =>  __('cms.products.deleted'),
                ]);
            }
    
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete product!'
            ]);
        } catch (\Exception $e) {
            \Log::error("Error deleting product with ID {$id}: " . $e->getMessage());
    
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while deleting the product.'
            ]);
        }
    } 

    public function updateStatus(Request $request)
    {
       // Validate the incoming request
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