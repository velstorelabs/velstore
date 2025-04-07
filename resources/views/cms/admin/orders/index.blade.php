
@extends('cms.admin.layouts.admin')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        <h6>Orders List</h6>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
       

        <table id="orders-table" class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Total Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@section('js')
@php
    $datatableLang = __('cms.datatables'); // Load the datatables translation if needed
@endphp

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#orders-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.orders.data') }}",
                type: 'POST',
                data: function(d) {
                    d._token = "{{ csrf_token() }}"; // Add CSRF token
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'order_date', name: 'order_date' },
                { data: 'status', name: 'status' },
                { data: 'total_price', name: 'total_price' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            pageLength: 10,
            language: @json($datatableLang) // Optional: datatables language translations if any
        });
    });
</script>
@endsection
