@extends('vendor.layouts.master')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.product_reviews.title_manage') }}</h6>
    </div>
    <div class="card-body">
        <table id="reviews-table" class="table table-bordered mt-4">
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
        </table>
    </div>
</div>

{{-- Delete Modal --}}
<div class="modal fade" id="deleteReviewModal" tabindex="-1" aria-labelledby="deleteReviewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('cms.product_reviews.confirm_delete') }}</h5>
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
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
@php
    $datatableLang = __('cms.datatables');
@endphp

<script>
    $(document).ready(function () {
        const table = $('#reviews-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('vendor.reviews.data') }}",
                type: 'GET'
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'customer_name', name: 'customer_name' },
                { data: 'product_name', name: 'product_name' },
                { data: 'rating', name: 'rating' },
                {
                    data: 'status',
                    name: 'status',
                    orderable: false,
                    searchable: false,
                    render: function (data) {
                        return data;
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        return `
                           <span class="border border-info dt-trash rounded-3 d-inline-block">
                                <a href="/vendor/reviews/${row.id}">
                                    <i class="bi bi-eye-fill text-info"></i>
                                </a>
                            </span>

                            <span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteReview(${row.id})">
                                <i class="bi bi-trash-fill text-danger"></i>
                            </span>
                        `;
                    }
                }
            ],
            pageLength: 10,
            language: @json($datatableLang),
        });
    });

    let reviewToDeleteId = null;

    function deleteReview(id) {
        reviewToDeleteId = id;
        $('#deleteReviewModal').modal('show');

        $('#confirmDeleteReview').off('click').on('click', function () {
            if (reviewToDeleteId !== null) {
                $.ajax({
                    url: '{{ route('vendor.reviews.destroy', ':id') }}'.replace(':id', reviewToDeleteId),
                    method: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        $('#reviews-table').DataTable().ajax.reload();
                        toastr.success(response.message);
                        $('#deleteReviewModal').modal('hide');
                    },
                    error: function () {
                        toastr.error('Error deleting review.');
                        $('#deleteReviewModal').modal('hide');
                    }
                });
            }
        });
    }
</script>
@endsection
