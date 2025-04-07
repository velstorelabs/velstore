

@extends('admin.vendor-views.layouts.master')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- jQuery (required for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    
@endsection

@section('content')

<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.social_media_links.create') }}</h6>
    </div>
    <div class="card-body">
        
        <a href="{{ route('vendor.social-media-links.create') }}" class="btn btn-success float-end mb-3">{{ __('cms.social_media_links.add_new') }}</a>
        <table id="social-media-links-table" class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>{{ __('cms.social_media_links.id') }}</th>
                    <th>{{ __('cms.social_media_links.platform') }}</th>
                    <th>{{ __('cms.social_media_links.link') }}</th>
                    <th>{{ __('cms.social_media_links.action') }}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- Delete Social Media Link Modal -->
<div class="modal fade" id="deleteSocialMediaLinkModal" tabindex="-1" aria-labelledby="deleteSocialMediaLinkModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteSocialMediaLinkModalLabel">{{ __('cms.social_media_links.massage_confirm') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> {{ __('cms.social_media_links.confirm_delete') }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.social_media_links.massage_cancel') }}</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteSocialMediaLink">{{ __('cms.social_media_links.massage_delete') }}</button>
            </div>
        </div>
    </div>
</div>
<!-- End Delete Social Media Link Modal -->

@endsection

@section('js')

 <!-- DataTables JS -->
 <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


@php
    $datatableLang = __('cms.datatables'); // Load the datatables translation
@endphp

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@if (session('success'))
<script>
    toastr.success("{{ session('success') }}", "{{ __('cms.social_media_links.success') }}", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 5000
    });
</script>
@endif
</script>
<script>
    $(document).ready(function() {
    $('#social-media-links-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('vendor.social-media-links.data') }}",
            type: 'POST',
            data: function(d) {
                d._token = "{{ csrf_token() }}";
            }
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'platform', name: 'platform' },
            { data: 'link', name: 'link' },
            {
                data: 'action',
                orderable: false,
                searchable: false,
                render: function(data, type, row) {
                    var editBtn = '<span class="border border-info dt-trash rounded-3 d-inline-block"><a href="/vendor/social-media-links/' + row.id + '/edit"><i class="bi bi-pencil-fill text-info"></i></a></span>';
                    var deleteBtn = '<span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteSocialMediaLink(' + row.id + ')"> <i class="bi bi-trash-fill text-danger"></i> </span>';
                    return editBtn + ' ' + deleteBtn;
                }
            }
        ],
        pageLength: 10,
        language: @json($datatableLang)
    });
});


let socialMediaLinkToDeleteId = null;

function deleteSocialMediaLink(id) {
    socialMediaLinkToDeleteId = id;
    $('#deleteSocialMediaLinkModal').modal('show');

    $('#confirmDeleteSocialMediaLink').off('click').on('click', function() {
        if (socialMediaLinkToDeleteId !== null) {
            $.ajax({
                url: '{{ route('vendor.social-media-links.destroy', ':id') }}'.replace(':id', socialMediaLinkToDeleteId),
                method: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    if (response.success) {
                        // Reload the datatable and show success message
                        $('#social-media-links-table').DataTable().ajax.reload();
                        toastr.error(response.message, "Success", {
                            closeButton: true,
                            progressBar: true,
                            positionClass: "toast-top-right",
                            timeOut: 5000
                        });
                        $('#deleteSocialMediaLinkModal').modal('hide');
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
                    // Handle any unexpected errors here
                    toastr.error("Error deleting social media link! Please try again.", "Error", {
                        closeButton: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        timeOut: 5000
                    });
                    $('#deleteSocialMediaLinkModal').modal('hide');
                }
            });
        }
    });
} 

</script>

@endsection


