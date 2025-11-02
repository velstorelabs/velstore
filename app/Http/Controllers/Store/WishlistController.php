<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $customer = Auth::guard('customer')->user();

        $products = $customer->wishlistProducts()
            ->with(['translation', 'thumbnail', 'primaryVariant', 'reviews'])
            ->withCount('reviews')
            ->orderBy('wishlists.created_at', 'desc')
            ->get();

        return view('themes.xylo.wishlist', compact('products'));
    }

    public function toggle(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $customer = Auth::guard('customer')->user();

        $wishlist = Wishlist::where('customer_id', $customer->id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($wishlist) {
            $wishlist->delete();

            return response()->json(['status' => 'removed', 'message' => __('store.product_detail.removed_from_wishlist')]);
        }

        Wishlist::create([
            'customer_id' => $customer->id,
            'product_id' => $request->product_id,
        ]);

        return response()->json(['status' => 'added', 'message' => __('store.product_detail.added_to_wishlist')]);
    }
}
