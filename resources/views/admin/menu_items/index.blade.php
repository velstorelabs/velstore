
@extends('admin.layouts.admin')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card mt-4">
    <div class="card-header  card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.menu_items.heading') }}</h6>
    </div>
    <div class="card-body">
        <!-- Add Menu Item Button (aligned to the right) -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('admin.menus.items.create', $menu->id) }}" class="btn btn-primary mt-2">{{ __('cms.menu_items.add_new') }}</a>
        </div>

        <!-- Menu Items Table -->
        <table id="menu-items-table" class="table">
            <thead>
                <tr>
                    <th>{{ __('cms.menu_items.id') }}</th>
                    <th>{{ __('cms.menu_items.slug') }}</th>
                    <th>{{ __('cms.menu_items.order_number') }}</th>
                    <th>{{ __('cms.menu_items.actions') }}</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<!-- Delete Menu Item Modal -->
<div class="modal fade" id="deleteMenuItemModal" tabindex="-1" aria-labelledby="deleteMenuItemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteMenuItemModalLabel">{{ __('cms.menu_items.massage_confirm') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">  {{ __('cms.menu_items.confirm_delete') }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('cms.menu_items.massage_cancel') }}</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteMenuItem">{{ __('cms.menu_items.massage_delete') }}</button>
            </div>
        </div>
    </div>
</div>
<!-- End Delete Menu Item Modal -->
@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@php
    $datatableLang = __('cms.datatables'); // Optional translation for DataTables
@endphp



@if (session('success'))
<script>
    toastr.success("{{ session('success') }}", "{{ __('cms.menu_items.success') }}", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 5000
    });
</script>
@endif

<script>
$(document).ready(function() {
    var menuId = {{ $menu->id }}; // Pass the menu ID from Blade to JavaScript
    $('#menu-items-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('admin.menus.item.getData') }}", // Ensure quotes around route
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}" // Ensure CSRF token is sent
            },
            error: function(xhr, error, thrown) {
                console.log("AJAX Error:", xhr.responseText); // Log full response
                alert("DataTables AJAX Error: Check console for details.");
            }
        },
        columns: [
                { data: 'id', name: 'id' },
                { data: 'slug', name: 'slug' },
                { data: 'order_number', name: 'order_number' },
                { 
                    data: 'action', 
                    orderable: false, 
                    searchable: false, 
                    render: function(data, type, row) {  // <- Make sure this line is correct
                        var editBtn = '<span class="border border-info dt-trash rounded-3 d-inline-block"><a href="/admin/items/' + row.id + '/edit" class=""><i class="bi bi-pencil-fill text-info"></i></a></span>';
                        var deleteBtn = '<span class="border border-danger dt-trash rounded-3 d-inline-block" onclick="deleteMenuItem(' + row.id + ')"> <i class="bi bi-trash-fill text-danger"></i> </span>';
                        return editBtn + ' ' + deleteBtn;
                    }
                }
        ],
        pageLength: 10,
        language: @json($datatableLang) // Optional: datatables language translations if any
    });
});

let menuItemToDeleteId = null;

function deleteMenuItem(id) {
    menuItemToDeleteId = id;
    $('#deleteMenuItemModal').modal('show');

    $('#confirmDeleteMenuItem').off('click').on('click', function() {
        if (menuItemToDeleteId !== null) {
            $.ajax({
                url: '{{ route('admin.items.destroy', ':id') }}'.replace(':id', menuItemToDeleteId),
                method: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    if (response.success) {
                        // Reload the datatable to reflect the deleted item
                        $('#menu-items-table').DataTable().ajax.reload();

                        // Show success message via toastr
                        toastr.error(response.message, "{{ __('cms.menu_items.success') }}", {
                            closeButton: true,
                            progressBar: true,
                            positionClass: "toast-top-right",
                            timeOut: 5000
                        });

                        // Close the modal
                        $('#deleteMenuItemModal').modal('hide');
                    } else {
                        // Show error message via toastr
                        toastr.error(response.message, "Error", {
                            closeButton: true,
                            progressBar: true,
                            positionClass: "toast-top-right",
                            timeOut: 5000
                        });
                    }
                },
                error: function(xhr) {
                    // Handle any unexpected error
                    toastr.error("Error deleting menu item! Please try again.", "Error", {
                        closeButton: true,
                        progressBar: true,
                        positionClass: "toast-top-right",
                        timeOut: 5000
                    });
                    $('#deleteMenuItemModal').modal('hide');
                }
            });
        }
    });
}

</script>
@endsection
