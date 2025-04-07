
@extends('cms.admin.layouts.admin')
@section('content')












<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.products.heading') }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
                        <input type="text" name="translations[{{ $language->code }}][name]" class="form-control" required>
                        <label class="form-label">{{ __('cms.products.description') }} ({{ $language->code }})</label>
                        <textarea name="translations[{{ $language->code }}][description]" class="form-control ck-editor-multi-languages"></textarea>
                    </div>
                @endforeach
            </div>
            
            <!-- Product Details -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <label class="form-label">{{ __('cms.products.category') }}</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->translation->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ __('cms.products.brand') }}</label>
                    <select name="brand_id" class="form-control">
                        <option value="">{{ __('cms.products.no_brand') }}</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->translation->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="mt-3">
                <label class="form-label">{{ __('cms.products.slug') }}</label>
                <input type="text" name="slug" class="form-control" required>
            </div>
            
            <!-- Product Type -->
            <div class="mt-3">
                <label class="form-label">{{ __('cms.products.product_type') }}</label>
                <select name="product_type" class="form-control" id="product_type" required>
                    <option value="simple">Simple</option>
                    <option value="variable">Variable</option>
                </select>
            </div>
            
            <!-- Product Variants -->
            <div id="variant-fields" class="mt-4" style="display:none;">
                <h5>Product Variants</h5>
                <div id="variant-container"></div>
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
                                        <option value="{{ $value->id }}">
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
                <label class="form-label">{{ __('cms.products.images') }}</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>
            
            <!-- Submit Button -->
            <div class="mt-4 text-start">
                <button type="submit" class="btn btn-primary">{{ __('cms.products.save') }}</button>
            </div>
        </form>
    </div>
</div>



























@endsection

@section('js')






<script>
$(document).ready(function () {
    let variantIndex = 0;
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
                        <input type="text" name="variants[${variantIndex}][SKU]" class="form-control" required>
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
                        <label class="form-label">Is Primary</label>
                        <input type="checkbox" name="variants[${variantIndex}][is_primary]" value="1" class="form-check-input">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Variant Images</label>
                        <input type="file" name="variants[${variantIndex}][images][]" class="form-control" multiple>
                    </div>
                </div>
            </div>`;
        $('#variant-container').append(variantHTML);
        variantIndex++;
    });

    $('#product_type').change(function () {
        if ($(this).val() === 'variable') {
            $('#variant-fields').show();
        } else {
            $('#variant-fields').hide();
            $('#variant-container').empty();
        }
    });
});
</script>








<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    // Select all elements with the class 'ck-editor-multi-languages' and apply CKEditor to each
    document.querySelectorAll('.ck-editor-multi-languages').forEach((element) => {
        ClassicEditor
            .create(element)
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection 


