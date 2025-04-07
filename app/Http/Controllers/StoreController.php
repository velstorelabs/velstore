<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\App;
use App\Models\Category;
use App\Models\Product;
use App\Models\Menu;
use App\Models\brand;

class StoreController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();

        $banners = Banner::where('status', 1)
        ->with('translation')
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();

        $categories = Category::where('status', 1)
        ->with('translation')
        ->orderBy('id', 'desc')
        ->take(10)
        ->get();

        $products = Product::where('status', 1)
        ->with(['translation', 'thumbnail'])
        ->withCount('reviews')
        ->orderBy('id', 'desc')
        ->take(10)
        ->get();

        return view('cms.themes.xylo.home', compact('banners', 'categories', 'products',));
    }
}
