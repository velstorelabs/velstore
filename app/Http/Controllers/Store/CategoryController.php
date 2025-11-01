<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display category page with products.
     */
    public function show($slug, Request $request)
    {
        $category = Category::with(['translation', 'parent.translation'])
            ->where('slug', $slug)
            ->firstOrFail();

        $query = Product::with([
            'translations',
            'primaryVariant',
            'reviews',
            'images',
        ])
            ->withCount(['reviews' => function ($q) {
                $q->where('is_approved', 1);
            }])
            ->withAvg(['reviews' => function ($q) {
                $q->where('is_approved', 1);
            }], 'rating')
            ->where('status', 1)
            ->where('category_id', $category->id);

        if ($request->filled('min_price')) {
            $query->whereHas('primaryVariant', function ($q) use ($request) {
                $q->where('price', '>=', $request->min_price);
            });
        }

        if ($request->filled('max_price')) {
            $query->whereHas('primaryVariant', function ($q) use ($request) {
                $q->where('price', '<=', $request->max_price);
            });
        }

        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'price_asc':
                    $query->join('product_variants', 'products.id', '=', 'product_variants.product_id')
                        ->where('product_variants.is_primary', 1)
                        ->orderBy('product_variants.price', 'asc')
                        ->select('products.*');
                    break;

                case 'price_desc':
                    $query->join('product_variants', 'products.id', '=', 'product_variants.product_id')
                        ->where('product_variants.is_primary', 1)
                        ->orderBy('product_variants.price', 'desc')
                        ->select('products.*');
                    break;

                case 'newest':
                    $query->latest();
                    break;

                case 'rating':
                    $query->withAvg('reviews', 'rating')
                        ->orderByDesc('reviews_avg_rating');
                    break;

                default:
                    $query->latest();
                    break;
            }
        } else {
            $query->latest();
        }

        $products = $query->paginate(12);

        $breadcrumbs = [];
        $parent = $category;
        while ($parent) {
            $breadcrumbs[] = $parent;
            $parent = $parent->parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);

        return view('themes.xylo.category', compact('category', 'products', 'breadcrumbs'));
    }
}
