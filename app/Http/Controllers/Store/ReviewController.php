<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:500',
        ]);

        // Check if already reviewed
        if (ProductReview::where('product_id', $request->product_id)
            ->where('customer_id', Auth::guard('customer')->id())
            ->exists()) {
            return back()->with('error', __('store.product_detail.review_already_submitted'));
        }

        ProductReview::create([
            'customer_id' => Auth::guard('customer')->id(),
            'product_id' => $request->product_id,
            'rating' => $request->rating,
            'review' => $request->review,
            'is_approved' => 1,
        ]);

        return back()->with('success', __('store.product_detail.review_success'));
    }
}
