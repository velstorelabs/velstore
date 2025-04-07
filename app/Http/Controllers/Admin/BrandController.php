<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use App\Services\Admin\BrandService;
use Illuminate\Http\Request;
use App\Models\Language;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    protected $brandService;

    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    public function index()
    {
        return view('cms.admin.brands.index');
    }

    public function getData(Request $request)
    {
            $brands = $this->brandService->getAllBrands();
        return datatables()->of($brands)
            ->addColumn('action', function ($brand) {
                return view('admin.brands.index', compact('brand'));
            })
            ->make(true);
    } 
    
    public function create()
    {
        $activeLanguages = Language::where('active', 1)->get();
        return view('cms.admin.brands.create', compact('activeLanguages'));
    }

    public function store(Request $request)
    {        
        $request->validate([
            'logo_url' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:10000', 
        ]);
    
        $result = $this->brandService->store($request->all());
    
        if ($result instanceof \Illuminate\Support\MessageBag) {
            return redirect()->back()->withErrors($result)->withInput();
        }
    
        return redirect()->route('admin.brands.index')->with('success',  __('cms.brands.created'));

    }

    public function edit($id)
    {      
        $brand = Brand::findOrFail($id);

        $activeLanguages = Language::where('active', 1)->get();
        return view('cms.admin.brands.edit', compact('brand', 'activeLanguages'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'logo_url' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'translations' => 'required|array', 
        ]);

        $result = $this->brandService->updateBrand($id, $request->all());

        if ($result instanceof \Illuminate\Support\MessageBag) {
            return redirect()->back()->withErrors($result)->withInput();
        }

        return redirect()->route('admin.brands.index')->with('success', __('cms.brands.updated'));
    }

    public function destroy($id)
    {      
        $result = $this->brandService->deleteBrand($id);

        if ($result) {
            return response()->json([
                'success' => true,
                'message' => __('cms.brands.deleted'),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting brand.',
            ]);
        }
        
    }

    public function updateStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:brands,id', 
            'status' => 'required|boolean', 
        ]);

        $brand = Brand::find($request->id);
        $brand->status = $request->status;
        $brand->save();

        if ($brand) {
            return response()->json([
                'success' => true,
                'message' =>  __('cms.brands.status_updated'),
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Brand status could not be updated.',
            ]);
        }
    }


}