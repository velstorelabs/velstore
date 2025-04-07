
@extends('admin.vendor-views.layouts.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- Bootstrap Toggle CSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.products.heading') }}</h6>
    </div>
    <div class="card-body">
        <table id="products-table" class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>{{ __('cms.products.id') }}</th>
                    <th>{{ __('cms.products.name') }}</th>
                    <th>{{ __('cms.products.description') }}</th>
                    <th>{{ __('cms.products.price') }}</th>
                    <th>{{ __('cms.products.stock') }}</th>
                    <th>{{ __('cms.products.status') }}</th>
                    <th>{{ __('cms.products.action') }}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- Delete Product Modal -->
<div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProductModalLabel">{{ __('cms.products.massage_confirm') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">{{ __('cms.products.confirm_delete') }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.products.massage_cancel') }}</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteProduct">{{ __('cms.products.massage_delete') }}</button>
            </div>
        </div>
    </div>
</div>
<!-- End Delete Product Modal -->

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
@php
    $datatableLang = __('cms.datatables'); // Load the datatables translation
@endphp

@if (session('success'))
<script>
    toastr.success("{{ session('success') }}", "{{ __('cms.products.success') }}", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 5000
    });
</script>
@endif  

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>

    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#products-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('products.data') }}",
                type: 'POST',
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },
                { data: 'price', name: 'price' },
                { data: 'stock', name: 'stock' },
                { 
                    data: 'status', 
                    name: 'status', 
                    orderable: false, 
                    searchable: false, 
                    render: function(data, type, row) {
                        // Render the custom toggle switch with On/Off
                        var isChecked = data ? 'checked' : ''; // If active, checked
                        return `<label class="switch">
                                    <input type="checkbox" class="toggle-status" data-id="${row.id}" ${isChecked}>
                                    <span class="slider round"></span>
                                </label>`;
                    }
                },
                { 
                    data: 'action', 
                    name: 'action', 
                    orderable: false, 
                    searchable: false,
                    render: function(data, type, row) {
                        var editBtn = '<span class="border border-edit dt-trash rounded-3 d-inline-block"><a href="/vendor/products/' + row.id + '/edit"><i class="bi bi-pencil-fill pencil-edit-color"></i></a></span>';

                        var deleteBtn = '<span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteProduct(' + row.id + ')"><i class="bi bi-trash-fill text-danger"></i></span>';
                        return editBtn + ' ' + deleteBtn;
                    }
                }
            ],
            pageLength: 10,
            language: @json($datatableLang) 
        });

        // Handle status change using the custom toggle
        $(document).on('change', '.toggle-status', function() {
            var productId = $(this).data('id');
            var newStatus = $(this).prop('checked') ? 1 : 0;
            updateProductStatus(productId, newStatus);
        });

    });

    let productToDeleteId = null;

    function deleteProduct(id) {
        productToDeleteId = id;
        $('#deleteProductModal').modal('show');

        $('#confirmDeleteProduct').off('click').on('click', function() {
            if (productToDeleteId !== null) {
                $.ajax({
                    url: '{{ route('vendor.products.destroy', ':id') }}'.replace(':id', productToDeleteId),
                    method: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#products-table').DataTable().ajax.reload();
                            toastr.error(response.message, "Success", {
                                closeButton: true,
                                progressBar: true,
                                positionClass: "toast-top-right",
                                timeOut: 5000
                            });
                            $('#deleteProductModal').modal('hide');
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
                        toastr.error('Error deleting product!', "Error", {
                            closeButton: true,
                            progressBar: true,
                            positionClass: "toast-top-right",
                            timeOut: 5000
                        });
                        $('#deleteProductModal').modal('hide');
                    }
                });
            }
        });
    }

    // Function to handle product status toggle
    function updateProductStatus(id, status) {
        $.ajax({
            url: '{{ route('admin.products.updateStatus') }}',
            method: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                id: id,
                status: status
            },
            success: function(response) {
                if (response.success) {
                    $('#products-table').DataTable().ajax.reload(); // Reload table to reflect changes
                    toastr.success(response.message, "Success", {
                        closeButton: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        timeOut: 5000
                    });
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
                toastr.error("Error updating product status! Please try again.", "Error", {
                    closeButton: true,
                    progressBar: true,
                    positionClass: "toast-top-right",
                    timeOut: 5000
                });
            }
        });
    }

</script>

@endsection


