<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\CategoryService;

class CategoryController extends Controller
{

    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('cms.admin.categories.index');
    }

     
    /**
     * Fetch categories for DataTables with server-side processing.
     */
    public function getCategories(Request $request)
    {
        if ($request->ajax()) {
            return $this->categoryService->getCategoriesForDataTable($request);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {      
       $activeLanguages = Language::where('active', 1)->get();
       return view('cms.admin.categories.create', compact('activeLanguages'));
    }

    public function store(Request $request )
    {
        
        $translations = $request->all()['translations'];

        foreach ($translations as $languageCode => $translation) {
            if ($request->hasFile("translations.$languageCode.image")) {
                $translations[$languageCode]['image'] = $request->file("translations.$languageCode.image");
            }
        }
    
        $result = $this->categoryService->store($translations);
    
        if ($result instanceof \Illuminate\Support\MessageBag) {
            return redirect()->back()->withErrors($result)->withInput();
        }
    
        return redirect()->route('admin.categories.index')->with('success', __('cms.categories.created'));
       
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $category = Category::with('translations')->findOrFail($id);

        $activeLanguages = Language::where('active', true)->get();

        return view('cms.admin.categories.edit', compact('category', 'activeLanguages'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $translations = $request->all()['translations'];

        foreach ($translations as $languageCode => $translation) {
            if ($request->hasFile("translations.$languageCode.image")) {
                $translations[$languageCode]['image'] = $request->file("translations.$languageCode.image");
            }
        }
    
        $this->categoryService->update($request, $id);
    
        return redirect()->route('admin.categories.index')->with('success', __('cms.categories.updated'));        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = $this->categoryService->destroy($id);

        if ($result) {
            return response()->json([
                'success' => true,
                'message' => __('cms.categories.deleted'),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting category.',
            ]);
        }
    }

    public function updateCategoryStatus(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'id' => 'required|exists:categories,id',
            'status' => 'required|boolean',  // 1 for active, 0 for inactive
        ]);

        $category = Category::find($request->id);
        $category->status = $request->status;
        $category->save();

        if ($category) {
            return response()->json([
                'success' => true,
                'message' =>  __('cms.categories.status_updated'),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Category status could not be updated.',
            ]);
        }
    }

}
