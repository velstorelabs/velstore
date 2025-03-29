<?php

namespace App\Http\Controllers\Vendor;


use App\Models\Product;
use App\Models\Category;
use App\Models\Language;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Vendor\ProductService;
use App\Services\Admin\CategoryService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        return view('vendor.products.index');
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
        $activeLanguages = Language::where('active', 1)->get(); 
        $categories = Category::with('translations')->get(); 

        $categories = $categories->map(function ($category) {
            $translation = $category->translations->firstWhere('language_code', 'en');
            $category->name = $translation ? $translation->name : 'No Name Available';
            return $category;
        });

        return view('vendor.products.create', compact('activeLanguages', 'categories'));  

    }

    public function store(Request $request)
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

        return redirect()->route('vendor.products.index')->with('success', __('cms.products.created')); 
       
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

        return view('vendor.products.edit', compact('product', 'categories', 'languages', 'imageUrl'));
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

        return redirect()->route('vendor.products.index')->with('success', __('cms.products.updated'));   
    }

    public function destroy($id)
    {
       
        try {
            $result = $this->productService->destroy($id);
    
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
