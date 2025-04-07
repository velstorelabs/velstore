@extends('cms.admin.layouts.admin')

@section('title', 'All Banners')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@section('content')
    <div class="container">

        <!-- Card-like Heading for "All Banners" -->
        <div class="card mt-4">
            <div class="card-header card-header-bg text-white">
                <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.banners.all_banners') }}</h6>
            </div>
        </div>
        <!-- Banner Table -->
        <div class="card mt-4">
            <div class="card-body">
                <table id="banners-table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>{{ __('cms.banners.id') }}</th>
                            <th>{{ __('cms.banners.banner_type') }}</th>
                            <th>{{ __('cms.banners.image') }}</th>
                            <th>{{ __('cms.banners.status') }}</th> <!-- New status column -->
                            <th>{{ __('cms.banners.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows will be dynamically added by DataTables -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <!-- Delete Banner Modal -->
    <div class="modal fade" id="deleteBannerModal" tabindex="-1" aria-labelledby="deleteBannerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteBannerModalLabel">{{ __('cms.banners.massage_confirm') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> {{ __('cms.banners.confirm_delete') }}</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.banners.massage_cancel') }}</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBanner">{{ __('cms.banners.massage_delete') }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Banner Modal -->
@endsection

@section('js')
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
@php
    $datatableLang = __('cms.datatables');
@endphp

@if (session('success'))
<script>
    toastr.success("{{ session('success') }}", "{{ __('cms.banners.success') }}", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 5000
    });
</script>
@endif
    <script>
     
    $(document).ready(function() {
        $('#banners-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.banners.data') }}", // Adjusted URL for banners
                type: 'POST',
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'type', name: 'type' },
                { data: 'image', name: 'image', orderable: false, searchable: false },
                { 
                    data: 'status', 
                    name: 'status', 
                    orderable: false, 
                    searchable: false,
                    render: function(data, type, row) {
                        // Render a toggle switch based on the status value
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
                        var editBtn = '<span class="border border-edit dt-trash rounded-3 d-inline-block"><a href="/admin/banners/' + row.id + '/edit"><i class="bi bi-pencil-fill pencil-edit-color"></i></a></span>';
                        var deleteBtn = '<span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteBanner(' + row.id + ')"><i class="bi bi-trash-fill text-danger"></i></span>';
                        return editBtn + ' ' + deleteBtn;
                    }
                }
            ],

            pageLength: 10,
            language: @json($datatableLang) 
        });

        // Handle toggle switch (activate/deactivate status)
        $(document).on('change', '.toggle-status', function() {
            var bannerId = $(this).data('id');
            var isActive = $(this).prop('checked') ? 1 : 0; 
            $.ajax({
                url: '{{ route('admin.banners.updateStatus') }}', 
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: bannerId,
                    status: isActive
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message, "Updated", {
                            closeButton: true,
                            progressBar: true,
                            positionClass: "toast-top-right",
                            timeOut: 5000
                        });
                    } else {
                        toastr.error(response.message, "Failed", {
                            closeButton: true,
                            progressBar: true,
                            positionClass: "toast-top-right",
                            timeOut: 5000
                        });
                    }
                },
                error: function() {
                    alert('Error updating status!');
                    $(this).prop('checked', !isActive);
                }
            });
        });
    });

    let bannerToDeleteId = null;

    function deleteBanner(id) {
        bannerToDeleteId = id;
        $('#deleteBannerModal').modal('show');

        $('#confirmDeleteBanner').off('click').on('click', function() {
            if (bannerToDeleteId !== null) {
                $.ajax({
                    url: '{{ route('admin.banners.destroy', ':id') }}'.replace(':id', bannerToDeleteId),
                    method: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#banners-table').DataTable().ajax.reload();
                            toastr.error(response.message, "Deleted", {
                                closeButton: true,
                                progressBar: true,
                                positionClass: "toast-top-right",
                                timeOut: 5000
                            });
                            $('#deleteBannerModal').modal('hide');
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
                        toastr.error('Error deleting banner!', "Error", {
                            closeButton: true,
                            progressBar: true,
                            positionClass: "toast-top-right",
                            timeOut: 5000
                        });
                        $('#deleteBannerModal').modal('hide');
                    }
                });
            }
        });
    }

    </script>
@endsection


