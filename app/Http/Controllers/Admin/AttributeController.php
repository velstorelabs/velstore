<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Language;
use App\Services\Admin\AttributeService;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AttributeController extends Controller
{
    protected $attributeService;

    public function __construct(AttributeService $attributeService)
    {
        $this->attributeService = $attributeService;
    }

    public function index()
    {
        $attributes = $this->attributeService->getAllAttributes();

        return view('admin.attributes.index', compact('attributes'));
    }

    public function getAttributesData(Request $request)
    {
        if ($request->ajax()) {
            $attributes = Attribute::with('values')->get();

            return DataTables::of($attributes)
                ->addColumn('values', function ($attribute) {
                    return $attribute->values->map(function ($value) {
                        return '<span class="badge bg-primary">'.e($value->value).'</span>';
                    })->implode(' ');
                })
                ->addColumn('action', function ($attribute) {
                    return '<a href="'.route('admin.attributes.edit', $attribute->id).'" class="btn btn-sm btn-warning">Edit</a>
                            <button class="btn btn-sm btn-danger" onclick="deleteAttribute('.$attribute->id.')">Delete</button>';
                })
                ->rawColumns(['values', 'action'])
                ->make(true);
        }
    }

    public function create()
    {
        $languages = Language::active()->get();

        return view('admin.attributes.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255|unique:attributes,name',
            'values' => 'required|array|min:1',
        ];

        foreach ($request->input('values', []) as $index => $value) {
            $rules["values.$index"] = 'required|string|max:255|distinct';
        }

        if ($request->has('translations')) {
            foreach ($request->input('translations', []) as $lang => $translations) {
                if (is_array($translations)) {
                    foreach ($translations as $i => $val) {
                        $rules["translations.$lang.$i"] = 'required|string|max:255';
                    }
                }
            }
        }

        $validated = $request->validate($rules);

        $this->attributeService->createAttribute($request->all());

        return redirect()->route('admin.attributes.index')->with('success', __('cms.attributes.success_create'));
    }

    public function edit(Attribute $attribute)
    {
        $attribute = $this->attributeService->getAttributeById($attribute->id);
        $languages = Language::active()->get();

        return view('admin.attributes.edit', compact('attribute', 'languages'));
    }

    public function update(Request $request, Attribute $attribute)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'values' => 'required|array',
            'values.*' => 'string|max:255',
            'translations' => 'array',
            'translations.*' => 'array',
            'translations.*.*' => 'nullable|string|max:255',
        ]);

        $this->attributeService->updateAttribute($attribute, $request->all());

        return redirect()->route('admin.attributes.index')->with('success', __('cms.attributes.success_update'));
    }

    public function destroy($id)
    {
        try {
            $this->attributeService->deleteAttribute($id);

            return response()->json(['success' => true, 'message' => __('cms.attributes.success_delete')]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error deleting attribute! Please try again.']);
        }
    }
}
