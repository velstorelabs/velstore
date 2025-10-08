

@extends('admin.layouts.admin')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">  
@endsection

@section('content')
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white">
            <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.brands.heading') }}
            </h6>
        </div>

        <div class="card-body">
            <table id="brands-table" class="table table-bordered mt-4 dt-style">
                <thead>
                    <tr>
                        <th>{{ __('cms.brands.id') }}</th>
                        <th>{{ __('cms.brands.name') }}</th>
                        <th>{{ __('cms.brands.logo') }}</th>
                        <th>{{ __('cms.brands.status') }}</th>
                        <th>{{ __('cms.brands.action') }}</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="deleteBrandModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteBrandModalLabel">{{ __('cms.brands.massage_confirm') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> {{ __('cms.brands.confirm_delete') }}</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.brands.massage_cancel') }}</button>
            <button type="button" class="btn btn-danger" id="confirmDeleteBrand">{{ __('cms.brands.massage_delete') }}</button>
            </div>
        </div>
        </div>
    </div>
    <!-- End Delete Modal -->
  
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    @php
        $datatableLang = __('cms.datatables');
    @endphp

    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}", "{{ __('cms.brands.success') }}", {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-right",
                timeOut: 5000
            });
        </script>
    @endif

<script>

    $(document).ready(function() {
        $('#brands-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.brands.getData') }}",
                type: 'GET',
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'slug', name: 'slug' },
                { 
                    data: 'logo_url', 
                    render: function(data) {
                        if (data) {
                            var logoPath = data.startsWith('http') ? data : '/storage/' + data;
                            return '<img src="' + logoPath + '" alt="Logo" width="50">';
                        } else {
                            return 'No Logo';
                        }
                    }
                },
                { 
                    data: 'status', 
                    name: 'status',
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
                    orderable: false, 
                    searchable: false, 
                    render: function(data, type, row) {
                        var editBtn = '<span class="border border-edit dt-trash rounded-3 d-inline-block" ><a href="/admin/brands/' + row.id + '/edit" class=""><i class="bi bi-pencil-fill pencil-edit-color"></i></a></span>';
                        var deleteBtn = '<span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteBrand(' + row.id + ')"> <i class="bi bi-trash-fill text-danger"></i> </span>';
                        return editBtn + ' ' + deleteBtn;
                    }
                }
            ],
            pageLength: 10,
            language: @json($datatableLang)
        });

        // Handle toggle switch (activate/deactivate status)
        $(document).on('change', '.toggle-status', function() {
            var brandId = $(this).data('id');
            var isActive = $(this).prop('checked') ? 1 : 0; // 1 for active, 0 for inactive
            $.ajax({
                url: '{{ route('admin.brands.updateStatus') }}',
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: brandId,
                    status: isActive
                },
                success: function(response) {
                    // Optionally show a success message
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
                    // Optionally show an error message
                    alert('Error updating status!');
                    // Revert the toggle if something goes wrong
                    $(this).prop('checked', !isActive);
                }
            });
        });

    });


    let brandToDeleteId = null;

    function deleteBrand(id) {
        brandToDeleteId = id;        
        $('#deleteBrandModal').modal('show');

        $('#confirmDeleteBrand').off('click').on('click', function() {
            if (brandToDeleteId !== null) {
                $.ajax({
                    url: '{{ route('admin.brands.destroy', ':id') }}'.replace(':id', brandToDeleteId),
                    method: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#brands-table').DataTable().ajax.reload();
                            console.log(response.message);

                            toastr.error(response.message, "{{ __('cms.brands.success') }}", {
                                closeButton: true,
                                progressBar: true,
                                positionClass: "toast-top-right",
                                timeOut: 5000
                            });
                            
                            $('#deleteBrandModal').modal('hide');
                        } else {
                            console.log(response.message); 
                        }
                    },
                    error: function(xhr) {
                        console.log('Error deleting brand!');
                        $('#deleteBrandModal').modal('hide');
                    }
                });
            }
        });
    }

</script>
@endsection

