<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('cms.admin.orders.index', compact('orders'));
    }

    public function getData(Request $request)
    {
       // Query orders and join any related tables if necessary
    $orders = Order::query();

    return DataTables::of($orders)
        ->addColumn('action', function ($order) {
            return '<form action="' . route('admin.orders.destroy', $order->id) . '" method="POST" style="display:inline;">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this order?\')">Delete</button>
                    </form>';
        })
        ->rawColumns(['action']) // Allow raw HTML in the action column
        ->make(true);
    }


    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully.');
    }
}
