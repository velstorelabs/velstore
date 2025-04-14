
@extends('admin.layouts.admin')
@section('content')

<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">Products</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <!-- Multilingual Product Name & Description -->
            <ul class="nav nav-tabs" id="languageTabs" role="tablist">
                @foreach($activeLanguages as $language)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $language->name }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $language->name }}" type="button" role="tab">{{ ucwords($language->name) }}</button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content mt-3" id="languageTabContent">
                @foreach($activeLanguages as $language)
                    <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $language->name }}" role="tabpanel">
                        <label class="form-label">{{ __('cms.products.name') }} ({{ $language->code }})</label>
                        <input type="text" name="translations[{{ $language->code }}][name]" class="form-control" value="{{ old('translations.' . $language->code . '.name', $product->getTranslation('name', $language->code)) }}" required>
                        <label class="form-label">{{ __('cms.products.description') }} ({{ $language->code }})</label>
                        <textarea name="translations[{{ $language->code }}][description]" class="form-control ck-editor-multi-languages">{{ old('translations.' . $language->code . '.description', $product->getTranslation('description', $language->code)) }}</textarea>
                    </div>
                @endforeach
            </div>
            
            <!-- Product Details -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <label class="form-label">{{ __('cms.products.category') }}</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->translation->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Brand</label>
                    <select name="brand_id" class="form-control">
                        <option value="">No Brand</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" {{ old('brand_id', $product->brand_id) == $brand->id ? 'selected' : '' }}>
                                {{ $brand->translation->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="mt-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $product->slug) }}" required>
            </div>
            
            <!-- Product Type -->
            <div class="mt-3">
                <label class="form-label">Product Type</label>
                <select name="product_type" class="form-control" id="product_type" required>
                    <option value="simple" {{ old('product_type', $product->product_type) == 'simple' ? 'selected' : '' }}>Simple</option>
                    <option value="variable" {{ old('product_type', $product->product_type) == 'variable' ? 'selected' : '' }}>Variable</option>
                </select>
            </div>
            
            <!-- Product Variants -->
            <div id="variant-fields" class="mt-4" style="display: {{ $product->product_type == 'variable' ? 'block' : 'none' }};">
                <h5>Product Variants</h5>
                <div id="variant-container">
                    @foreach($product->variants as $variantIndex => $variant)
                    <div class="variant-group mt-3">
                        <div class="row">
                            @foreach($activeLanguages as $language)
                                <div class="col-md-4">
                                    <label class="form-label">Variant Name ({{ $language->code }})</label>
                                    <input type="text" name="variants[{{ $variantIndex }}][translations][{{ $language->code }}][name]" 
                                        class="form-control" 
                                        value="{{ old('variants.' . $variantIndex . '.translations.' . $language->code . '.name', 
                                        $product->getTranslation('name', $language->code)) }}" 
                                        required>
                                </div>
                            @endforeach
                            <div class="col-md-4">
                                <label class="form-label">Price</label>
                                <input type="number" name="variants[{{ $variantIndex }}][price]" class="form-control" value="{{ old('variants.' . $variantIndex . '.price', $variant->price) }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Stock</label>
                                <input type="number" name="variants[{{ $variantIndex }}][stock]" class="form-control" value="{{ old('variants.' . $variantIndex . '.stock', $variant->stock) }}" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label class="form-label">SKU</label>
                                <input type="text" name="variants[{{ $variantIndex }}][sku]" class="form-control" value="{{ old('variants.' . $variantIndex . '.sku', $variant->sku) }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Barcode</label>
                                <input type="text" name="variants[{{ $variantIndex }}][barcode]" class="form-control" value="{{ old('variants.' . $variantIndex . '.barcode', $variant->barcode) }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Weight</label>
                                <input type="number" name="variants[{{ $variantIndex }}][weight]" class="form-control" value="{{ old('variants.' . $variantIndex . '.weight', $variant->weight) }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label class="form-label">Dimensions</label>
                                <input type="text" name="variants[{{ $variantIndex }}][dimensions]" class="form-control" value="{{ old('variants.' . $variantIndex . '.dimensions', $variant->dimensions) }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Image</label>
                                <input type="file" name="variants[{{ $variantIndex }}][image]" class="form-control">
                                
                                @if ($variant->image)
                                    <input type="hidden" name="variants[{{ $variantIndex }}][old_image]" value="{{ $variant->image }}">
                                    <img src="{{ asset('storage/' . $variant->image) }}" alt="Variant Image" width="50" class="mt-2">
                                @endif
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger remove-variant mt-3">Remove Variant</button>
                    </div>
                @endforeach
                
                </div>
                <button type="button" class="btn btn-outline-secondary mt-3" id="add-variant">Add Variant</button>
            </div>

            <!-- Product Attributes -->
            <div class="form-group">
                <label for="attributes">Attributes</label>
                <div class="row">
                    @foreach($attributes as $index => $attribute)
                <div class="col-6">
                    <div class="attribute-group">
                        <label>{{ $attribute->name }}</label>

                        <select name="attributes[{{ $attribute->id }}]" class="form-control">
                            <option value="">Select {{ $attribute->name }}</option>

                            @foreach($attribute->values as $value)
                                <option value="{{ $value->id }}"
                                        {{ old('attributes.' . $attribute->id, $product->attributeValues->pluck('id')->contains($value->id)) ? 'selected' : '' }}>

                                    {{ $value->translations->where('language_code', app()->getLocale())->first()->translated_value ?? $value->value }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                @if (($index + 1) % 2 == 0) <!-- Close the row after every two columns -->
                    </div><div class="row">
                @endif
            @endforeach
                </div>
            </div>
            
                        <!-- Product Images -->
            <div class="mt-3">
                <label class="form-label">Product Images</label>
                <input type="file" name="images[]" class="form-control" multiple>
                @if ($product->images->count()) <!-- Use count() to check if images exist -->
                    <div class="mt-2">
                        @foreach($product->images as $image)
                            <img src="{{ asset('storage/' . $image->image_url) }}" alt="Product Image" width="50" class="mt-2">
                        @endforeach
                    </div>
                @endif
            </div>
            
            <!-- Submit Button -->
            <div class="mt-4 text-start">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('js')
<script>
$(document).ready(function () {
    let variantIndex = {{ count($product->variants) }};
$('#add-variant').click(function () {
    let variantHTML = `<div class="variant-group mt-3">
        <div class="row">
            @foreach($activeLanguages as $language)
                <div class="col-md-4">
                    <label class="form-label">Variant Name ({{ $language->code }})</label>
                    <input type="text" name="variants[${variantIndex}][translations][{{ $language->code }}][name]" class="form-control" required>
                </div>
            @endforeach
            <div class="col-md-4">
                <label class="form-label">Price</label>
                <input type="number" name="variants[${variantIndex}][price]" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Stock</label>
                <input type="number" name="variants[${variantIndex}][stock]" class="form-control" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <label class="form-label">SKU</label>
                <input type="text" name="variants[${variantIndex}][sku]" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Barcode</label>
                <input type="text" name="variants[${variantIndex}][barcode]" class="form-control">
            </div>
            <div class="col-md-4">
                <label class="form-label">Weight</label>
                <input type="number" name="variants[${variantIndex}][weight]" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <label class="form-label">Dimensions</label>
                <input type="text" name="variants[${variantIndex}][dimensions]" class="form-control">
            </div>
            <div class="col-md-4">
                <label class="form-label">Image</label>
                <input type="file" name="variants[${variantIndex}][image]" class="form-control">
            </div>
        </div>
        <button type="button" class="btn btn-danger remove-variant mt-3">Remove Variant</button>
    </div>`;
    
    $('#variant-container').append(variantHTML);
    variantIndex++;
});

    $(document).on('click', '.remove-variant', function () {
        $(this).closest('.variant-group').remove();
    });
    
    // Show/Hide variant fields based on product type
    $('#product_type').change(function () {
        if ($(this).val() === 'variable') {
            $('#variant-fields').show();
        } else {
            $('#variant-fields').hide();
        }
    }).trigger('change');
});
</script>
@endsection
