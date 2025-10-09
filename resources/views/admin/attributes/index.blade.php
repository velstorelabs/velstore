
@extends('admin.layouts.admin')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- jQuery (required for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@section('content')

<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.attributes.title_manage') }}</h6>
    </div>
    <div class="card-body">
        <table id="attributes-table" class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>{{ __('cms.attributes.id') }}</th>
                    <th>{{ __('cms.attributes.name') }}</th>
                    <th>{{ __('cms.attributes.values') }}</th>
                    <th>{{ __('cms.attributes.action') }}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<div class="modal fade" id="deleteAttributeModal" tabindex="-1" aria-labelledby="deleteAttributeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteAttributeModalLabel">{{ __('cms.attributes.confirm_delete') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">{{ __('cms.attributes.delete_confirmation') }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.attributes.cancel') }}</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteAttribute">{{ __('cms.attributes.delete') }}</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@php
    $datatableLang = __('cms.datatables'); 
@endphp
@if (session('success'))
<script>
    toastr.success("{{ session('success') }}", "{{ __('cms.attributes.success') }}", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 5000
    });
</script>
@endif


<script>
    $(document).ready(function() {
        $('#attributes-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.attributes.data') }}",
                type: 'POST',
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                }
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'values', name: 'values', orderable: false, searchable: false },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        var editBtn = '<span class="border border-info dt-trash rounded-3 d-inline-block"><a href="/admin/attributes/' + row.id + '/edit"><i class="bi bi-pencil-fill text-info"></i></a></span>';
                        var deleteBtn = '<span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteAttribute(' + row.id + ')"> <i class="bi bi-trash-fill text-danger"></i> </span>';
                        return editBtn + ' ' + deleteBtn;
                    }
                }
            ],
            pageLength: 10,
            language: {!! json_encode($datatableLang) !!}
        });
    });


    let attributeToDeleteId = null;

    function deleteAttribute(id) {
    attributeToDeleteId = id;
    $('#deleteAttributeModal').modal('show');

    $('#confirmDeleteAttribute').off('click').on('click', function() {
        if (attributeToDeleteId !== null) {
            $.ajax({
                url: '{{ route('admin.attributes.destroy', ':id') }}'.replace(':id', attributeToDeleteId),
                method: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    if (response.success) {
                        $('#attributes-table').DataTable().ajax.reload();
                        toastr.error(response.message, "{{ __('cms.attributes.success') }}", {
                            closeButton: true,
                            progressBar: true,
                            positionClass: "toast-top-right",
                            timeOut: 5000
                        });
                        $('#deleteAttributeModal').modal('hide');
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
                    toastr.error("Error deleting attribute! Please try again.", "Error", {
                        closeButton: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        timeOut: 5000
                    });
                    $('#deleteAttributeModal').modal('hide');
                }
            });
        }
    });
}

</script>

@endsection
