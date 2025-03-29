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
        return view('admin.products.index');
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
      /*  $categories = Category::all();  

        $categories = collect($categories); 

        $categories = $categories->map(function ($category) {
            if (is_object($category) && isset($category->translations) && $category->translations instanceof \Illuminate\Database\Eloquent\Collection) {
                $translation = $category->translations->firstWhere('language_code', 'en');
                $category->name = $translation ? $translation->name : 'No Name Available';
            } else {
                $category->name = 'No Name Available';
            }

            return $category;
        });
  
        return view('admin.products.create', compact('categories'));*/

        $locale = app()->getLocale(); // Get the current language

    // Fetch categories with translations
    $categories = Category::with('translations')->get()->map(function ($category) use ($locale) {
        $translation = $category->translations->firstWhere('language_code', $locale);
        $category->name = $translation ? $translation->name : 'No Name Available';
        return $category;
    });

    // Fetch products with translations
    $products = Product::with('translations')->get()->map(function ($product) use ($locale) {
        $translation = $product->translations->firstWhere('language_code', $locale);
        $product->name = $translation ? $translation->name : 'No Name Available';
        return $product;
    });

    return view('admin.products.create', compact('categories', 'products'));

    }

    public function store(Request $request)
    {          
       /* $request->validate([
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

        return redirect()->route('admin.products.index')->with('success', __('cms.products.created')); */

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'currency' => 'required|string',
            'translations' => 'required|array', 
            'translations.*.name' => 'required|string|max:255', 
            'translations.*.description' => 'nullable|string',
            'variants' => 'nullable|array',
            'variants.*.name' => 'required_with:variants|string',
            'variants.*.value' => 'required_with:variants|string',
            'variants.*.price' => 'required_with:variants|numeric',
            'variants.*.discount_price' => 'nullable|numeric',
            'variants.*.stock' => 'required_with:variants|integer',
            'variants.*.SKU' => 'required_with:variants|string|unique:product_variants,SKU',
            'variants.*.weight' => 'nullable|string',
            'variants.*.dimensions' => 'nullable|string',
        ]);
    
        // ✅ Ensure Product Name is Set
        $translations = $request->input('translations');
        $productData = $request->except(['translations', 'variants']);
    
        $defaultLang = 'en';
        $productData['name'] = $translations[$defaultLang]['name'] ?? array_values($translations)[0]['name'] ?? null;
    
        if (!$productData['name']) {
            return redirect()->back()->withErrors(['translations' => 'At least one translation must have a name.'])->withInput();
        }
    
        // ✅ Ensure Product ID Exists
        $product_id = $request->input('product_id');
        if (!$product_id) {
            return redirect()->back()->withErrors(['product_id' => 'Product is required.'])->withInput();
        }
    
        // ✅ Fetch Variants Data
        $variants = $request->input('variants', []); 
    
        // ✅ Store Product and Variants using Service
        $result = $this->productService->store($translations, $productData, $variants);
    
        if ($result instanceof \Illuminate\Support\MessageBag) {
            return redirect()->back()->withErrors($result)->withInput();
        }
    
        return redirect()->route('admin.products.index')->with('success', __('cms.products.created'));
       
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

        return view('admin.products.edit', compact('product', 'categories', 'languages', 'imageUrl'));
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