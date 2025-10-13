@extends('vendor.layouts.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6>My Orders</h6>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table id="orders-table" class="table table-bordered mt-4 w-100">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
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
@php $datatableLang = __('cms.datatables'); @endphp

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
$(function () {
    const table = $('#orders-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('vendor.orders.data') }}",
            type: 'POST',
            data: function (d) {
                d._token = "{{ csrf_token() }}";
            }
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'customer', name: 'customer', orderable: false, searchable: false },
            { data: 'order_date', name: 'order_date', orderable: false, searchable: false },
            { data: 'status', name: 'status' },
            { data: 'total_price', name: 'total_price', orderable: false, searchable: false },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        pageLength: 10,
        language: @json($datatableLang)
    });

    $(document).on('submit', '.delete-order-form', function (e) {
        e.preventDefault();
        const form = this;
        if (!confirm('Are you sure you want to delete this order?')) return;

        $.ajax({
            url: form.action,
            type: 'POST',
            data: $(form).serialize(),
            success: function (res) {
                if (res?.success) {
                    alert(res.message || 'Deleted');
                    table.ajax.reload(null, false);
                } else {
                    alert(res?.message || 'Failed to delete the order.');
                }
            },
            error: function () {
                alert('An error occurred while deleting the order.');
            }
        });
    });
});
</script>
@endsection
