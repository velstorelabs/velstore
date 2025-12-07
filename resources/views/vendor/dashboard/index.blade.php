@extends('vendor.layouts.master')

@section('css')
<style>
    body {
        background-color: #ffffff;
        color: #333333;
    }

    .dashboard-item {
        display: flex;
        align-items: center;
        padding: 15px;
        border-radius: 12px;
        border: 1px solid #b0b0b0;
        background: #fff;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .dashboard-item:hover {
        background-color: #f8f9fa;
        box-shadow: 0 4px 6px rgba(102, 179, 255, 0.2);
    }

    .icon-box {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background: #e0e0e0;
        border: 1px solid #b0b0b0;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        transition: all 0.3s ease;
    }

    .dashboard-item:hover .icon-box {
        background: #66b3ff;
        border-color: #66b3ff;
    }

    .icon-box i {
        font-size: 22px;
        color: #555;
        transition: color 0.3s;
    }

    .dashboard-item:hover .icon-box i {
        color: #fff;
    }

    .text-box h6 {
        margin: 0;
        font-size: 16px;
        font-weight: 600;
        color: #2d2d2d;
    }

    .text-box p {
        margin: 0;
        font-size: 14px;
        color: #6c757d;
    }
</style>
@endsection

@section('content')
<div class="container mt-4">
    <div class="row g-3">

        <!-- My Sales -->
        <div class="col-md-3">
            <div class="dashboard-item">
                <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                <div class="text-box">
                    <h6>{{ __('cms.dashboard.my_sales') }}</h6>
                    <p>{{ __('cms.dashboard.today') }}: ${{ number_format($data['todaySales'], 2) }}</p>
                    <p>{{ __('cms.dashboard.total') }}: ${{ number_format($data['totalSales'], 2) }}</p>
                </div>
            </div>
        </div>

        <!-- My Orders -->
        <div class="col-md-3">
            <div class="dashboard-item">
                <div class="icon-box"><i class="fas fa-shopping-bag"></i></div>
                <div class="text-box">
                    <h6>{{ __('cms.dashboard.my_orders') }}</h6>
                    <p>{{ __('cms.dashboard.completed') }}: {{ $data['completedOrders'] }}</p>
                    <p>{{ __('cms.dashboard.total') }}: {{ $data['totalOrders'] }}</p>
                </div>
            </div>
        </div>

        <!-- My Products -->
        <div class="col-md-3">
            <div class="dashboard-item">
                <div class="icon-box"><i class="fas fa-box-open"></i></div>
                <div class="text-box">
                    <h6>{{ __('cms.dashboard.my_products') }}</h6>
                    <p>{{ __('cms.dashboard.total') }}: {{ $data['totalProducts'] }}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
