<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\MenuItemTranslation;
use App\Models\Language;
use App\Services\Admin\MenuItemService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class MenuItemController extends Controller
{   
    protected $menuItemService;

    public function __construct(MenuItemService $menuItemService)
    {
        $this->menuItemService = $menuItemService;
    }

    public function getData(Request $request)
    {
            $menuItems = $this->menuItemService->getAllMenuItems();
        return datatables()->of($menuItems)
            ->addColumn('action', function ($menuItems) {
                return view('cms.admin.menus.index', compact('menuItems'));
            })
            ->make(true);
    } 

    public function index()
    {
        $menu = Menu::first(); 
        return view('cms.admin.menu_items.index', compact('menu'));
    }

    public function create($menuId)
    {
            
        $menu = Menu::findOrFail($menuId);
        $menus = Menu::all(); 
        $languages = Language::where('active', 1)->get();

        return view('cms.admin.menu_items.create', compact('menu', 'menus', 'languages'));
    }


    public function store(Request $request, $menuId)
    {
      
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'order_number' => 'required|integer',
            'parent_id' => 'nullable|exists:menu_items,id',
            'title' => 'required|array',
            'title.*' => 'required|string|max:255',
        ]);
    
        try {
            $this->menuItemService->createMenuItem($request, $menuId);
    
            return redirect()->route('admin.menus.items.index', ['menu' => $menuId])
                            ->with('success', __('cms.menu_items.created'));
        } catch (\Exception $e) {
            return back()->with('error', __('cms.menu_items.creation_failed'));
        }

    } 


    public function edit($id)
    {
        $menuItem = MenuItem::with(['menu', 'translations'])->findOrFail($id);
        $menus = Menu::with('menuItems.translations')->get();
        $languages = Language::where('active', 1)->get();
        return view('cms.admin.menu_items.edit', compact('menuItem', 'menus', 'languages'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'parent_id' => 'nullable|exists:menu_items,id',
            'order_number' => 'required|integer',
            'title' => 'required|array',
            'title.*' => 'required|string|max:255'
        ]);
    
        $this->menuItemService->updateMenuItem($request, $request->menu_id, $id);
    
        return redirect()->route('admin.menus.item.index')
                         ->with('success', __('cms.menu_items.updated'));

    }

    public function destroy($id)
    {
        $menuItem = MenuItem::findOrFail($id);
        if ($menuItem->delete()) {
            return response()->json([
                'success' => true,
                'message' => __('cms.menu_items.deleted'),
            ]);
        }
    
        return response()->json([
            'success' => false,
            'message' => 'Error deleting menu item.',
        ]);
    }
}