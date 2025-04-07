<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductReviewController extends Controller
{
    public function index(Request $request)
    {  
        return view('cms.admin.reviews.index');
    }

    public function getData()
    {

        $reviews = ProductReview::with(['product', 'customer']);

        return DataTables::of($reviews)
            ->addColumn('product_name', function ($review) {
                return optional($review->product)->name ?? 'N/A';
            })
            ->addColumn('customer_name', function ($review) {
                return optional($review->customer)->name ?? 'Guest';
            })
            ->addColumn('status', function ($review) {
                return $review->status == 1 ? '<span class="badge bg-success">Approved</span>' 
                                            : '<span class="badge bg-danger">Pending</span>';
            })
            ->addColumn('action', function ($review) {
                return '<a href="' . route('admin.reviews.show', $review->id) . '" class="btn btn-sm btn-info">View</a>
                        <form action="' . route('admin.reviews.destroy', $review->id) . '" method="POST" style="display:inline-block;">
                            ' . csrf_field() . method_field('DELETE') . '
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</button>
                        </form>';
            })
            ->rawColumns(['status', 'action'])
            ->make(true);
    }



    public function show(ProductReview $review)
    {
        return view('cms.admin.reviews.show', compact('review'));
    }

    public function edit(ProductReview $review)
    {
        return view('cms.admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, ProductReview $review)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string',
            'is_approved' => 'boolean',
        ]);

        $review->update($request->all());

        return redirect()->route('admin.reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy(ProductReview $review)
    {
        try {
            $review->delete();
            return response()->json(['success' => true, 'message' => __('cms.product_reviews.success_delete')]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => __('cms.product_reviews.error_delete')]);
        }
    }
}
