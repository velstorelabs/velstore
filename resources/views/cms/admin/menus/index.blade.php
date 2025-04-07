

@extends('cms.admin.layouts.admin')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.menus.all_menus') }}</h6>
    </div>
    <div class="card-body">
        <table id="menus-table" class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>{{ __('cms.menus.id') }}</th>
                    <th>{{ __('cms.menus.title') }}</th>
                    <th>{{ __('cms.menus.action') }}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- Delete Menu Modal -->
<div class="modal fade" id="deleteMenuModal" tabindex="-1" aria-labelledby="deleteMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteMenuModalLabel">{{ __('cms.menus.massage_confirm') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> {{ __('cms.menus.confirm_delete') }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.menus.massage_cancel') }}</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteMenu">{{ __('cms.menus.massage_delete') }}</button>
            </div>
        </div>
    </div>
</div>
<!-- End Delete Menu Modal -->

@endsection

@section('js')
@php
    $datatableLang = __('cms.datatables'); // Load the datatables translation if needed
@endphp

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@if (session('success'))
<script>
    toastr.success("{{ session('success') }}", "{{ __('cms.menus.success') }}", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 5000
    });
</script>
@endif
<script>
  
$(document).ready(function() {
        $('#menus-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.menus.data') }}",
                type: 'POST',
                data: function(d) {
                    d._token = "{{ csrf_token() }}"; // Add CSRF token
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { 
                    data: 'action', 
                    orderable: false, 
                    searchable: false, 
                    render: function(data, type, row) {
                        var editBtn = '<span class="border border-info dt-trash rounded-3 d-inline-block"><a href="/admin/menus/' + row.id + '/edit" class=""><i class="bi bi-pencil-fill text-info"></i></a></span>';
                        var deleteBtn = '<span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteMenu(' + row.id + ')"> <i class="bi bi-trash-fill text-danger"></i> </span>';
                        return editBtn + ' ' + deleteBtn;
                    }
                }
            ],
            pageLength: 10,
            language: @json($datatableLang) // Optional: datatables language translations if any
        });
    });

    let menuToDeleteId = null;

    function deleteMenu(id) {
        menuToDeleteId = id;
        $('#deleteMenuModal').modal('show');

        $('#confirmDeleteMenu').off('click').on('click', function() {
            if (menuToDeleteId !== null) {
                $.ajax({
                    url: '{{ route('admin.menus.destroy', ':id') }}'.replace(':id', menuToDeleteId),
                    method: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#menus-table').DataTable().ajax.reload(); 
                            
                            toastr.error(response.message, "Success", {
                                closeButton: true,
                                progressBar: true,
                                positionClass: "toast-top-right",
                                timeOut: 5000
                            });

                            // Close the modal
                            $('#deleteMenuModal').modal('hide');
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
                        toastr.error("Error deleting menu! Please try again.", "Error", {
                            closeButton: true,
                            progressBar: true,
                            positionClass: "toast-top-right",
                            timeOut: 5000
                        });
                        $('#deleteMenuModal').modal('hide');
                    }
                });
            }
        });
    }


</script>
@endsection


