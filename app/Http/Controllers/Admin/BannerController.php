<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\BannerTranslation;
use App\Http\Controllers\Controller;
use App\Services\Admin\BannerService;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;


class BannerController extends Controller
{
    protected $bannerService;

    public function __construct(BannerService $bannerService)
    {
        $this->bannerService = $bannerService;
    }

    public function index(Request $request)
    {
        $banners = $this->bannerService->getAllBanners();  
        return view('cms.admin.banners.index', compact('banners'));

    }

    public function toggleStatus($id,  Request $request)
    {
        
        $banner = Banner::findOrFail($id);
        $banner->status = $request->status;
        $banner->save();
    
        return response()->json(['message' => 'Banner status updated successfully']);
    }

    public function getData(Request $request)
    {
        $banners = Banner::with('translations')->get();

        return DataTables::of($banners)
            ->addColumn('image', function ($banner) {
                $imageUrl = $banner->translations->firstWhere('language_code', 'en')->image_url ?? null;
                return $imageUrl ? '<img src="' . Storage::url($imageUrl) . '" width="50" />' : 'No Image';
            })
            ->addColumn('action', function ($banner) {
                return '<a href="' . route('admin.banners.edit', $banner->id) . '" class="btn btn-primary">Edit</a>
                        <form action="' . route('admin.banners.destroy', $banner->id) . '" method="POST" style="display:inline;">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>';
            })
            ->rawColumns(['image', 'action']) // Allow HTML in these columns
            ->make(true);
    }
    
    public function create()
    {
        
       $languages = Language::where('active', 1)->get();

        return view('cms.admin.banners.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $this->bannerService->store($request);
        return redirect()->route('admin.banners.index')->with('success', __('cms.banners.created')); 
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);

       $languages = Language::where('active', 1)->get();

        $translations = BannerTranslation::where('banner_id', $banner->id)
                                         ->get()
                                         ->keyBy('language_code');

        return view('cms.admin.banners.edit', compact('banner', 'languages', 'translations'));
    }

    public function update(Request $request, $id)
    {
        $this->bannerService->update($request, $id);
        return redirect()->route('admin.banners.index')->with('success', __('cms.banners.updated'));
    }

    public function destroy($id)
    {

        try {
            $this->bannerService->delete($id);
    
            return response()->json([
                'success' => true,
                'message' => __('cms.banners.deleted'),
            ]);
        } catch (\Exception $e) {
            \Log::error("Error deleting banner with ID {$id}: " . $e->getMessage());
    
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while deleting the banner.'
            ]);
        }
    } 

    public function updateStatus(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:banners,id', 
            'status' => 'required|in:0,1', 
        ]);
    
        try {
            $banner = Banner::findOrFail($request->id);
    
            $banner->status = $request->status;
            $banner->save();
    
            return response()->json([
                'success' => true,
                'message' =>  __('cms.banners.status_updated'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating banner status.'
            ]);
        }
    }
    

}
