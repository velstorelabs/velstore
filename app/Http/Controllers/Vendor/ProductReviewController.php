<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductReviewController extends Controller
{
    public function index()
    {
        return view('vendor.reviews.index');
    }

    public function getData(Request $request)
    {
        $vendorId = auth()->guard('vendor')->id();

        $reviews = ProductReview::with(['product.translations', 'customer'])
            ->whereHas('product', function ($query) use ($vendorId) {
                $query->where('vendor_id', $vendorId);
            });

        return DataTables::of($reviews)
            ->addColumn('product_name', function ($review) {
                $lang = app()->getLocale();
                $product = $review->product;

                if (! $product) {
                    return 'N/A';
                }

                $translation = $product->translations->firstWhere('language_code', $lang);

                return $translation?->name ?? $product->translations->first()?->name ?? 'N/A';
            })
            ->addColumn('customer_name', function ($review) {
                return optional($review->customer)->name ?? 'Guest';
            })
            ->addColumn('status', function ($review) {
                return $review->status == 1
                    ? '<span class="badge bg-success">Approved</span>'
                    : '<span class="badge bg-danger">Pending</span>';
            })
            ->addColumn('action', function ($review) {
                return '
                <a href="'.route('vendor.reviews.show', $review->id).'" class="btn btn-sm btn-info">View</a>
                <form action="'.route('vendor.reviews.destroy', $review->id).'" method="POST" style="display:inline-block;">
                    '.csrf_field().method_field('DELETE').'
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</button>
                </form>
            ';
            })
            ->rawColumns(['status', 'action'])
            ->make(true);
    }

    public function show(ProductReview $review)
    {
        $vendorId = auth()->guard('vendor')->id();

        if (! $review->product || $review->product->vendor_id !== $vendorId) {
            abort(403, 'Unauthorized access');
        }

        $review->load(['product.translations', 'customer']);

        return view('vendor.reviews.show', compact('review'));
    }

    public function destroy(ProductReview $review)
    {
        $vendorId = auth()->guard('vendor')->id();

        if ($review->product->vendor_id !== $vendorId) {
            return response()->json(['success' => false, 'message' => 'Unauthorized']);
        }

        try {
            $review->delete();

            return response()->json(['success' => true, 'message' => __('cms.product_reviews.success_delete')]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => __('cms.product_reviews.error_delete')]);
        }
    }
}
