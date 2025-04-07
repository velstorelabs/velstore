

@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <h2>Create Product Variant</h2>

    <!-- Display success message if available -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.product_variants.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="product_id">Product</label>
            <select name="product_id" id="product_id" class="form-control" required>
                <option value="">Select Product</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                        {{ $product->translations->first()->name ?? 'Unknown Product' }} <!-- Default to 'Unknown Product' if no translation exists -->
                    </option>
                @endforeach
            </select>
            @error('product_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="variant_slug">Variant Slug</label>
            <input type="text" name="variant_slug" id="variant_slug" class="form-control" value="{{ old('variant_slug') }}" required>
            @error('variant_slug')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Variant Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="value">Variant Value</label>
            <input type="text" name="value" id="value" class="form-control" value="{{ old('value') }}" required>
            @error('value')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="discount_price">Discount Price</label>
            <input type="number" step="0.01" name="discount_price" id="discount_price" class="form-control" value="{{ old('discount_price') }}">
            @error('discount_price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="stock">Stock Quantity</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock') }}" required>
            @error('stock')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="SKU">SKU</label>
            <input type="text" name="SKU" id="SKU" class="form-control" value="{{ old('SKU') }}" required>
            @error('SKU')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight" class="form-control" value="{{ old('weight') }}">
            @error('weight')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="dimensions">Dimensions</label>
            <input type="text" name="dimensions" id="dimensions" class="form-control" value="{{ old('dimensions') }}">
            @error('dimensions')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Translation Fields -->
        @foreach($languages as $language)
            <div class="form-group">
                <label for="translations_{{ $language->code }}_name">{{ ucfirst($language->code) }} Variant Name</label>
                <input type="text" name="translations[{{ $language->code }}][name]" id="translations_{{ $language->code }}_name" class="form-control" value="{{ old('translations.' . $language->code . '.name') }}" required>
                @error('translations.' . $language->code . '.name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="translations_{{ $language->code }}_value">{{ ucfirst($language->code) }} Variant Value</label>
                <input type="text" name="translations[{{ $language->code }}][value]" id="translations_{{ $language->code }}_value" class="form-control" value="{{ old('translations.' . $language->code . '.value') }}">
                @error('translations.' . $language->code . '.value')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary ">Create Variant</button>
    </form>
</div>
@endsection

