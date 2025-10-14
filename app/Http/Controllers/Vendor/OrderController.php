<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function index()
    {
        return view('vendor.orders.index');
    }

    public function getData(Request $request)
    {
        $vendorId = Auth::guard('vendor')->id();

        $query = Order::whereHas('details.product', function ($q) use ($vendorId) {
            $q->where('vendor_id', $vendorId);
        })
            ->with(['details.product', 'customer'])
            ->latest();

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('customer', function (Order $order) {
                if ($order->customer) {
                    return $order->customer->name.' ('.$order->customer->email.')';
                } elseif ($order->guest_email) {
                    return $order->guest_email.' (Guest)';
                }

                return 'N/A';
            })
            ->addColumn('order_date', fn (Order $order) => $order->created_at?->format('Y-m-d H:i'))
            ->addColumn('total_price', fn (Order $order) => number_format((float) $order->total_amount, 2))
            ->editColumn('status', fn (Order $order) => ucfirst($order->status))
            ->addColumn('action', function (Order $order) {
                return '
                    <form action="'.route('vendor.orders.destroy', $order->id).'" method="POST" class="d-inline delete-order-form">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm(\'Are you sure you want to delete this order?\')">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </form>
                ';
            })
            ->rawColumns(['action'])
            ->setRowId('id')
            ->make(true);
    }

    public function destroy($id)
    {
        $vendorId = Auth::guard('vendor')->id();

        $order = Order::whereHas('details.product', function ($query) use ($vendorId) {
            $query->where('vendor_id', $vendorId);
        })->findOrFail($id);

        $order->delete();

        return response()->json([
            'success' => true,
            'message' => __('cms.orders.deleted_success'),
        ]);
    }
}
