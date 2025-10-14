@extends('admin.layouts.admin')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')
<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6>{{ __('cms.orders.title') }}</h6>
    </div>
    <div class="card-body">
        <table id="orders-table" class="table table-bordered mt-4 w-100">
            <thead>
                <tr>
                    <th>{{ __('cms.orders.id') }}</th>
                     <th>{{ __('cms.orders.customer') }}</th>
                    <th>{{ __('cms.orders.order_date') }}</th>
                    <th>{{ __('cms.orders.status') }}</th>
                    <th>{{ __('cms.orders.total_price') }}</th>
                    <th>{{ __('cms.orders.action') }}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('cms.orders.delete_confirm_title') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">{{ __('cms.orders.delete_confirm_message') }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.orders.delete_cancel') }}</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteOrder">{{ __('cms.orders.delete_button') }}</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@php
    $datatableLang = __('cms.datatables'); 
@endphp

{{-- Session-based Toastr (redirect success messages) --}}
@if (session('success'))
    <script>
        toastr.success("{{ session('success') }}", "{{ __('cms.orders.success') }}", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: 5000
        });
    </script>
@endif
@if (session('error'))
    <script>
        toastr.error("{{ session('error') }}", "Error", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: 5000
        });
    </script>
@endif

<script>
$(document).ready(function () {
    const table = $('#orders-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('admin.orders.data') }}",
            type: 'POST',
            data: function (d) {
                d._token = "{{ csrf_token() }}";
            }
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'customer', name: 'customer', orderable: false, searchable: true },
            { data: 'order_date', name: 'order_date', orderable: false, searchable: false },
            { data: 'status', name: 'status' },
            { data: 'total_price', name: 'total_price', orderable: false, searchable: false },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        pageLength: 10,
        language: @json($datatableLang)
    });

    let orderToDeleteId = null;

    window.deleteOrder = function(id) {
        orderToDeleteId = id;
        $('#deleteOrderModal').modal('show');
    }

    $('#confirmDeleteOrder').on('click', function() {
        if(orderToDeleteId === null) return;

        $.ajax({
            url: '{{ route("admin.orders.destroy", ":id") }}'.replace(':id', orderToDeleteId),
            type: 'DELETE',
            data: { _token: "{{ csrf_token() }}" },
            success: function(res) {
                if(res.success) {
                    table.ajax.reload(null, false);
                    toastr.error(res.message, "{{ __('cms.orders.success') }}", {
                        closeButton: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        timeOut: 5000
                    });
                    $('#deleteOrderModal').modal('hide');
                    orderToDeleteId = null;
                } else {
                    toastr.error(res.message || 'Failed to delete order', "Error", {
                        closeButton: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        timeOut: 5000
                    });
                }
            },
            error: function() {
                toastr.error('An error occurred while deleting the order', "Error", {
                    closeButton: true,
                    progressBar: true,
                    positionClass: "toast-top-right",
                    timeOut: 5000
                });
                $('#deleteOrderModal').modal('hide');
            }
        });
    });
});
</script>
@endsection
