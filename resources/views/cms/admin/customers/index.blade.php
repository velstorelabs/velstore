
@extends('cms.admin.layouts.admin')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')
<div class="container">
    <!-- Title Card -->
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white d-flex justify-content-between align-items-center">
            <h6>{{ __('cms.customers.title_manage') }}</h6>
        </div>
    </div>

    <!-- Customer List Card -->
    <div class="card mt-4">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table id="customers-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('cms.customers.id') }}</th>
                        <th>{{ __('cms.customers.name') }}</th>
                        <th>{{ __('cms.customers.email') }}</th>
                        <th>{{ __('cms.customers.phone') }}</th>
                        <th>{{ __('cms.customers.address') }}</th>
                        <th>{{ __('cms.customers.status') }}</th>
                        <th>{{ __('cms.customers.actions') }}</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<!-- Delete Customer Modal -->
<div class="modal fade" id="deleteCustomerModal" tabindex="-1" aria-labelledby="deleteCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCustomerModalLabel">{{ __('cms.customers.confirm_delete') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">{{ __('cms.customers.delete_message') }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.customers.cancel') }}</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteCustomer">{{ __('cms.customers.delete') }}</button>
            </div>
        </div>
    </div>
</div>
<!-- End Delete Customer Modal -->

@endsection

@section('js')
<!-- DataTables Script -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<!-- Toastr Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@php
    $datatableLang = __('cms.datatables'); // Get translation array for DataTables
@endphp

@if (session('success'))
<script>
    toastr.success("{{ session('success') }}", "{{ __('cms.customers.success') }}", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 5000
    });
</script>
@endif

<script>
$('#customers-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: "{{ route('admin.customers.data') }}", // Adjust route as needed
        type: "GET"
    },
    language: {!! json_encode($datatableLang) !!}, 
    columns: [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'email', name: 'email' },
        { data: 'phone', name: 'phone' },
        { data: 'address', name: 'address' },
        { data: 'status', name: 'status' },
        {
            data: 'action',
            orderable: false,
            searchable: false,
            render: function(data, type, row) {
                var deleteBtn = '<span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteCustomer(' + row.id + ')"><i class="bi bi-trash-fill text-danger"></i></span>';
                return deleteBtn;
            }
        }
    ]
});

function deleteCustomer(id) {
    $('#deleteCustomerModal').modal('show');
    $('#confirmDeleteCustomer').off('click').on('click', function() {
        $.ajax({
            url: '{{ route('admin.customers.destroy', ':id') }}'.replace(':id', id),
            method: 'DELETE',
            data: {
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {
                if (response.success) {
                    // Reload the DataTable and show success message
                    $('#customers-table').DataTable().ajax.reload();
                    toastr.success(response.message, "Success", {
                        closeButton: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        timeOut: 5000
                    });
                    $('#deleteCustomerModal').modal('hide');
                } else {
                    toastr.error(response.message, "Error", {
                        closeButton: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        timeOut: 5000
                    });
                }
            },
            error: function(xhr) {
                // Error handling
                toastr.error("Error deleting customer! Please try again.", "Error", {
                    closeButton: true,
                    progressBar: true,
                    positionClass: "toast-top-right",
                    timeOut: 5000
                });
                $('#deleteCustomerModal').modal('hide');
            }
        });
    });
}
</script>
@endsection
