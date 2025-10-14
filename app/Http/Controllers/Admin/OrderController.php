<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.index');
    }

    public function getData(Request $request)
    {
        $query = Order::query()->latest()->with('customer');

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('customer', function (Order $order) {
                if ($order->customer) {
                    return $order->customer->name.' ('.$order->customer->email.')';
                }

                return $order->guest_email ?? 'Guest';
            })
            ->addColumn('order_date', function (Order $order) {
                return $order->created_at?->format('Y-m-d H:i');
            })
            ->addColumn('total_price', function (Order $order) {
                return number_format((float) $order->total_amount, 2);
            })
            ->editColumn('status', function (Order $order) {
                return ucfirst($order->status);
            })
            ->addColumn('action', function (Order $order) {
                return '
                    <span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteOrder('.$order->id.')">
                        <i class="bi bi-trash-fill text-danger"></i>
                    </span>
                ';
            })
            ->rawColumns(['action'])
            ->setRowId('id')
            ->make(true);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['success' => true, 'message' => __('cms.orders.deleted_success')]);
    }
}
