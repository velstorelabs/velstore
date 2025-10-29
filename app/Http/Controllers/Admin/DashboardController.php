<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Vendor;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalSales' => Order::where('status', 'completed')->sum('total_amount'),
            'todaySales' => Order::whereDate('created_at', today())->where('status', 'completed')->sum('total_amount'),
            'totalOrders' => Order::count(),
            'completedOrders' => Order::where('status', 'completed')->count(),
            'totalVendors' => Vendor::where('status', 'active')->count(),
            'totalCustomers' => Customer::where('status', 'active')->count(),
        ];

        return view('admin.dashboard.index', compact('data'));
    }
}
