
@extends('cms.admin.layouts.admin')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
@endsection

@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white">
            <h6>{{ __('cms.product_reviews.title_manage') }}</h6>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table id="reviews-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('cms.product_reviews.review_id') }}</th>
                        <th>{{ __('cms.product_reviews.customer_name') }}</th>
                        <th>{{ __('cms.product_reviews.product_name') }}</th>
                        <th>{{ __('cms.product_reviews.rating') }}</th>
                        <th>{{ __('cms.product_reviews.status') }}</th>
                        <th>{{ __('cms.product_reviews.actions') }}</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<!-- Delete Product Review Modal -->
<div class="modal fade" id="deleteReviewModal" tabindex="-1" aria-labelledby="deleteReviewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteReviewModalLabel">{{ __('cms.product_reviews.confirm_delete') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">{{ __('cms.product_reviews.delete_message') }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.product_reviews.cancel') }}</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteReview">{{ __('cms.product_reviews.delete') }}</button>
            </div>
        </div>
    </div>
</div>
<!-- End Delete Product Review Modal -->

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@php
    $datatableLang = __('cms.datatables'); // Get translation array
@endphp

@if (session('success'))
<script>
    toastr.success("{{ session('success') }}", "{{ __('cms.product_reviews.success') }}", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 5000
    });
</script>
@endif

<script>
$('#reviews-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: "{{ route('admin.reviews.data') }}",
        type: "GET" // Fix for 405 error
    },
    language: {!! json_encode($datatableLang) !!}, 
    columns: [
        { data: 'id', name: 'id' },
        { data: 'customer_name', name: 'customer_name' },
        { data: 'product_name', name: 'product_name' },
        { data: 'rating', name: 'rating' },
        { data: 'status', name: 'status' },
        {
            data: 'action',
            orderable: false,
            searchable: false,
            render: function(data, type, row) {
                var deleteBtn = '<span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteReview(' + row.id + ')"><i class="bi bi-trash-fill text-danger"></i></span>';
                return deleteBtn;
            }
        }
    ]
});

function deleteReview(id) {
    $('#deleteReviewModal').modal('show');
    $('#confirmDeleteReview').off('click').on('click', function() {
        $.ajax({
            url: '{{ route('admin.reviews.destroy', ':id') }}'.replace(':id', id),
            method: 'DELETE',
            data: {
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {
                if (response.success) {
                    // Reload the datatable and show success message
                    $('#reviews-table').DataTable().ajax.reload();
                    toastr.error(response.message, "Success", {
                        closeButton: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        timeOut: 5000
                    });
                    $('#deleteReviewModal').modal('hide');
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
                toastr.error("Error deleting review! Please try again.", "Error", {
                    closeButton: true,
                    progressBar: true,
                    positionClass: "toast-top-right",
                    timeOut: 5000
                });
                $('#deleteReviewModal').modal('hide');
            } 
        });
    });
}
</script>

@endsection
