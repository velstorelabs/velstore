<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Language;
use App\Services\Admin\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return view('admin.categories.index');
    }

    public function getCategories(Request $request)
    {
        if ($request->ajax()) {
            return $this->categoryService->getCategoriesForDataTable($request);
        }
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'translations' => 'required|array',
        ];

        foreach ($request->input('translations', []) as $lang => $data) {
            $rules["translations.$lang.name"] = 'required|string|max:255';
            $rules["translations.$lang.description"] = 'required|string|min:5';
            $rules["translations.$lang.image"] = 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048';
        }

        $request->validate($rules);

        $translations = $request->input('translations');
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

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $category = Category::with('translations')->findOrFail($id);

        $activeLanguages = Language::where('active', true)->get();

        return view('admin.categories.edit', compact('category', 'activeLanguages'));
    }

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
        $request->validate([
            'id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
        ]);

        $category = Category::find($request->id);
        $category->status = $request->status;
        $category->save();

        if ($category) {
            return response()->json([
                'success' => true,
                'message' => __('cms.categories.status_updated'),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Category status could not be updated.',
            ]);
        }
    }
}
