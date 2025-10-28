@extends('admin.layouts.admin')

@section('css')
<style>
    body {
        background-color: #ffffff;
        color: #333333;
    }
    .dashboard-item {
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.3s;
        border: 1px solid #b0b0b0;
    }
    .dashboard-item:hover {
        background: #f8f9fa;
    }
    .icon-container {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #e0e0e0;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        border: 1px solid #b0b0b0;
    }
    .icon-container i {
        font-size: 20px;
        color: #555;
    }
    .text-container h6 {
        margin: 0;
        font-size: 16px;
        font-weight: 600;
        color: #2d2d2d;
    }
    .text-container p {
        margin: 0;
        font-size: 14px;
        color: #6c757d;
    }
</style>
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row g-3">
            <div class="col-md-3">
                <div class="dashboard-item">
                    <div class="icon-container">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="text-container">
                        <h6>Total Sales</h6>
                        <p>Today: ${{ number_format($data['todaySales'], 2) }}</p>
                        <p>Total: ${{ number_format($data['totalSales'], 2) }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="dashboard-item">
                    <div class="icon-container">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="text-container">
                        <h6>Total Orders</h6>
                        <p>Completed: {{ $data['completedOrders'] }}</p>
                        <p>All Orders: {{ $data['totalOrders'] }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="dashboard-item">
                    <div class="icon-container">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="text-container">
                        <h6>Total Vendors</h6>
                        <p>Active: {{ $data['totalVendors'] }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="dashboard-item">
                    <div class="icon-container">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="text-container">
                        <h6>Total Customers</h6>
                        <p>{{ $data['totalCustomers'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
