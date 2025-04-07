
{{--
@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <h2>Product Variants</h2>

    <!-- Display success message if available -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('admin.product_variants.create') }}" class="btn btn-primary">Create New Variant</a>
    </div>

    <!-- Product Variants Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Variant Name</th>
                <th>Variant Value</th>
                <th>Price</th>
                <th>Stock</th>
                <th>SKU</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productVariants as $productVariant)
                <tr>
                    <td>
                        {{ $productVariant->product->translations->first()->name ?? 'Unknown Product' }} <!-- Display the product's name translation -->
                    </td>
                    <td>
                        @foreach($languages as $language)
                            @php
                                $translation = $productVariant->translations->where('locale', $language->code)->first();
                            @endphp
                            <strong>{{ ucfirst($language->code) }}:</strong> 
                            {{ $translation->name ?? 'N/A' }}<br>
                        @endforeach
                    </td>
                    <td>{{ $productVariant->value }}</td>
                    <td>{{ $productVariant->price }}</td>
                    <td>{{ $productVariant->stock }}</td>
                    <td>{{ $productVariant->SKU }}</td>
                    <td>
                        <a href="{{ route('admin.product_variants.edit', $productVariant->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <!-- Delete button with confirmation -->
                        <form action="{{ route('admin.product_variants.destroy', $productVariant->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this variant?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    {{ $productVariants->links() }}
</div>
@endsection

--}}





@extends('admin.layouts.admin')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- jQuery (required for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
@endsection

@section('content')
<div class="container">
    <h2>Product Variants</h2>

    <!-- Display success message if available -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('admin.product_variants.create') }}" class="btn btn-primary">Create New Variant</a>
    </div>

    <!-- Product Variants Table -->
    <table id="product-variants-table" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>  <!-- Add the ID column -->
                <th>Product</th>
                <th>Variant Name</th>
                <th>Variant Value</th>
                <th>Price</th>
                <th>Stock</th>
                <th>SKU</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data will be populated via DataTables -->
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#product-variants-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.product_variants.data') }}",  // This is the URL to fetch the data via AJAX
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}"
                }
            },
            columns: [
                { data: 'id', name: 'id' },  // Add the ID column here
                { data: 'product', name: 'product' },
                { data: 'variant_name', name: 'variant_name' },
                { data: 'value', name: 'value' }, // Adjust this if needed
                { data: 'price', name: 'price' },
                { data: 'stock', name: 'stock' },
                { data: 'SKU', name: 'SKU' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endsection



