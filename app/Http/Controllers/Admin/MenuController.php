<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Language;
use App\Models\MenuItemTranslation;
use App\Services\Admin\MenuService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class MenuController extends Controller
{   
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function index(Request $request)
    {
        return view('cms.admin.menus.index');
    }

    public function getData(Request $request)
    {
        $menus = $this->menuService->getAllMenus();

        return DataTables::of($menus)
            ->addColumn('action', function ($menu) {
                return '<a href="' . route('admin.menus.edit', $menu->id) . '" class="btn btn-sm btn-primary">Edit</a>
                        <a href="' . route('admin.menus.destroy', $menu->id) . '" class="btn btn-sm btn-danger" 
                        onclick="event.preventDefault(); document.getElementById(\'delete-form-' . $menu->id . '\').submit();">Delete</a>
                        <form id="delete-form-' . $menu->id . '" action="' . route('admin.menus.destroy', $menu->id) . '" method="POST" style="display: none;">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                        </form>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $languages = Language::all();
        $menus = $this->menuService->getAllMenus();  
        return view('cms.admin.menus.create', compact('languages', 'menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $menu = $this->menuService->createMenu([
            'title' => $request->input('title'),
            'date' => now(),
        ]);

        return redirect()->route('admin.menus.items.create', ['menu' => $menu->id])
                         ->with('success', __('cms.menus.created')); 

       
    }

    public function edit($id)
    {
        $menu = $this->menuService->getMenuById($id);  
        return view('cms.admin.menus.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $this->menuService->updateMenu($id, [
            'title' => $request->input('title'),
        ]);

        return redirect()->route('admin.menus.index')->with('success', __('cms.menus.updated'));
    }

    public function destroy($id)
    {
        try {
            $menu = Menu::findOrFail($id);  
            $menu->delete();  
            return response()->json([
                'success' => true,
                'message' =>  __('cms.menus.deleted'),
            ]);
        } catch (\Exception $e) {
            \Log::error('Error deleting menu: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Error deleting menu. Please try again.'
            ]);
    }
} 


}