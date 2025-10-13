@extends('vendor.layouts.master')

@section('content')

<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.products.title_create') }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('vendor.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Language Tabs --}}
            <ul class="nav nav-tabs" id="languageTabs" role="tablist">
                @foreach($languages as $language)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" 
                                id="{{ $language->code }}-tab" 
                                data-bs-toggle="tab" 
                                data-bs-target="#{{ $language->code }}" 
                                type="button" 
                                role="tab">
                            {{ ucwords($language->name) }}
                        </button>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content mt-3" id="languageTabContent">
                @foreach($languages as $language)
                    <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" 
                         id="{{ $language->code }}" 
                         role="tabpanel">

                        <label class="form-label">{{ __('cms.products.product_name') }} ({{ $language->code }})</label>
                        <input type="text"
                               name="translations[{{ $language->code }}][name]"
                               class="form-control @error("translations.{$language->code}.name") is-invalid @enderror"
                               value="{{ old("translations.{$language->code}.name") }}">
                        @error("translations.{$language->code}.name")
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror

                        <label class="form-label mt-3">{{ __('cms.products.description') }} ({{ $language->code }})</label>
                        <textarea name="translations[{{ $language->code }}][description]"
                                  class="form-control ck-editor-multi-languages @error("translations.{$language->code}.description") is-invalid @enderror">{{ old("translations.{$language->code}.description") }}</textarea>
                        @error("translations.{$language->code}.description")
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                @endforeach
            </div>

            {{-- Category & Brand --}}
            <div class="row mt-4">
                <div class="col-md-6">
                    <label class="form-label">{{ __('cms.products.category') }}</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->translation->name ?? '—' }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ __('cms.products.brand') }}</label>
                    <select name="brand_id" class="form-control">
                        <option value="">{{ __('cms.products.no_brand') }}</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                {{ $brand->translation->name ?? '—' }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Variants --}}
            <div id="variants-wrapper" class="mt-3"></div>
            <div class="d-flex gap-2 mt-3">
                 <button type="button" id="add-variant-btn"
                    class="btn btn-light rounded-circle shadow-sm border d-flex align-items-center justify-content-center"
                    style="width:48px; height:48px;">
                    <i class="fa-solid fa-plus text-primary fs-5"></i>
                </button>
                <button type="button" id="remove-variant-btn"
                    class="btn btn-light rounded-circle shadow-sm border d-flex align-items-center justify-content-center"
                    style="width:48px; height:48px;" disabled>
                    <i class="fa-solid fa-trash fs-5 text-danger"></i>
                </button>
            </div>
            <template id="variant-template">
                <div class="card p-3 mt-3 variant-item border rounded" data-index="__INDEX__">
                    <h5>{{ __('cms.products.variants') }} <span class="variant-number">__INDEX__</span></h5>
                    <div class="row">
                        <div class="col-md-4">
                            <label>{{ __('cms.products.variant_name_en') }}</label>
                            <input type="text" name="variants[__INDEX__][name]" class="form-control" value="__NAME__" />
                            <div class="invalid-feedback d-block variant-name-error"></div>
                        </div>
                        <div class="col-md-4">
                            <label>{{ __('cms.products.price') }}</label>
                            <input type="number" step="0.01" name="variants[__INDEX__][price]" class="form-control" value="__PRICE__" />
                            <div class="invalid-feedback d-block variant-price-error"></div>
                        </div>
                        <div class="col-md-4">
                            <label>{{ __('cms.products.discount_price') }}</label>
                            <input type="number" step="0.01" name="variants[__INDEX__][discount_price]" class="form-control" value="__DISCOUNT__" />
                        </div>

                        <div class="col-md-4 mt-2">
                            <label>{{ __('cms.products.stock') }}</label>
                            <input type="number" name="variants[__INDEX__][stock]" class="form-control" value="__STOCK__" />
                            <div class="invalid-feedback d-block variant-stock-error"></div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>{{ __('cms.products.sku') }}</label>
                            <input type="text" name="variants[__INDEX__][SKU]" class="form-control" value="__SKU__" />
                            <div class="invalid-feedback d-block variant-sku-error"></div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>{{ __('cms.products.barcode') }}</label>
                            <input type="text" name="variants[__INDEX__][barcode]" class="form-control" value="__BARCODE__" />
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>{{ __('cms.products.weight') }}</label>
                            <input type="text" name="variants[__INDEX__][weight]" class="form-control" placeholder="e.g., 1.5 kg" value="__WEIGHT__" />
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>{{ __('cms.products.dimension') }}</label>
                            <input type="text" name="variants[__INDEX__][dimension]" class="form-control" placeholder="e.g., 10x20x5 cm" value="__DIMENSION__" />
                        </div>
                        <div class="col-md-6 mt-2">
                            <label>{{ __('cms.products.size') }}</label>
                            <select name="variants[__INDEX__][size_id]" class="form-control">
                                @foreach($sizes as $size)
                                    <option value="{{ $size->id }}" __SIZE_SELECTED__>{{ $size->value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mt-2">
                            <label>{{ __('cms.products.color') }}</label>
                            <select name="variants[__INDEX__][color_id]" class="form-control">
                                @foreach($colors as $color)
                                    <option value="{{ $color->id }}" __COLOR_SELECTED__>{{ $color->value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </template>

            {{-- Images --}}
            <div class="mt-3">
                <label class="form-label">{{ __('cms.products.images') }}</label>
                <div class="custom-file">
                    <label class="btn btn-primary" for="productImages">{{ __('cms.products.choose_file') }}</label>
                    <input type="file" name="images[]" class="form-control d-none" id="productImages" multiple onchange="previewMultipleImages(this)">
                </div>
                <div id="productImagesPreview" class="mt-2 d-flex flex-wrap gap-2"></div>
            </div>

            {{-- Submit --}}
            <div class="mt-4 text-start">
                <button type="submit" class="btn btn-primary">{{ __('cms.products.save_product') }}</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('js')
<script>
document.addEventListener("DOMContentLoaded", function () {
    @if ($errors->any())
        var firstErrorElement = document.querySelector('.is-invalid');
        if (firstErrorElement) {
            var tabPane = firstErrorElement.closest('.tab-pane');
            if (tabPane) {
                var tabId = tabPane.getAttribute('id');
                var triggerEl = document.querySelector(`button[data-bs-target="#${tabId}"]`);
                if (triggerEl) {
                    var tab = new bootstrap.Tab(triggerEl);
                    tab.show();
                }
            }
        }
    @endif
});
</script>

<script>
let variantIndex = 0;
let validationErrors = @json($errors->getMessages());

function updateRemoveButtonState() {
    const count = $('#variants-wrapper .variant-item').length;
    $('#remove-variant-btn').prop('disabled', count === 0);
}

function addVariant(variant = {}, index = variantIndex) {
    let template = $('#variant-template').html();
    template = template
        .replace(/__INDEX__/g, index)
        .replace(/__NAME__/g, variant.name || '')
        .replace(/__PRICE__/g, variant.price || '')
        .replace(/__DISCOUNT__/g, variant.discount_price || '')
        .replace(/__STOCK__/g, variant.stock || '')
        .replace(/__SKU__/g, variant.SKU || '')   
        .replace(/__BARCODE__/g, variant.barcode || '')
        .replace(/__WEIGHT__/g, variant.weight || '')
        .replace(/__DIMENSION__/g, variant.dimension || '')
        .replace(/__SIZE_SELECTED__/g, '')
        .replace(/__COLOR_SELECTED__/g, '');

    const $variant = $(template);

    if(variant.size_id) $variant.find(`select[name="variants[${index}][size_id]"] option[value="${variant.size_id}"]`).attr('selected', true);
    if(variant.color_id) $variant.find(`select[name="variants[${index}][color_id]"]`).attr('selected', true);

    if(validationErrors[`variants.${index}.name`]) {
        $variant.find('.variant-name-error').text(validationErrors[`variants.${index}.name`][0]);
        $variant.find(`input[name="variants[${index}][name]"]`).addClass('is-invalid');
    }
    if(validationErrors[`variants.${index}.price`]) {
        $variant.find('.variant-price-error').text(validationErrors[`variants.${index}.price`][0]);
        $variant.find(`input[name="variants[${index}][price]"]`).addClass('is-invalid');
    }
    if(validationErrors[`variants.${index}.stock`]) {
        $variant.find('.variant-stock-error').text(validationErrors[`variants.${index}.stock`][0]);
        $variant.find(`input[name="variants[${index}][stock]"]`).addClass('is-invalid');
    }
    if(validationErrors[`variants.${index}.SKU`]) {
        $variant.find('.variant-sku-error').text(validationErrors[`variants.${index}.SKU`][0]);
        $variant.find(`input[name="variants[${index}][SKU]"]`).addClass('is-invalid');
    }

    $('#variants-wrapper').append($variant);
    variantIndex++;
    updateRemoveButtonState();
}

$(document).ready(function () {
    @if(old('variants'))
        let oldVariants = @json(old('variants'));
        oldVariants.forEach((v, i) => addVariant(v, i));
    @else
        addVariant();
    @endif

    $('#add-variant-btn').click(() => addVariant());
    $('#remove-variant-btn').click(() => {
        const $variants = $('#variants-wrapper .variant-item');
        if ($variants.length > 0) {
            $variants.last().remove();
            variantIndex--;
            updateRemoveButtonState();
        }
    });
});
</script>

{{-- Image Preview --}}
<script>
let selectedFiles = [];

@if (session()->has('_old_input'))
    window.addEventListener('load', () => {
        const oldFiles = sessionStorage.getItem('vendor_product_temp_images');
        if (oldFiles) {
            selectedFiles = JSON.parse(oldFiles).map(b64 => {
                const file = dataURLtoFile(b64.data, b64.name);
                file.uniqueId = b64.name + '_' + file.size; 
                return file;
            });
            refreshPreview(document.getElementById('productImages'));
        }
    });
@endif

function previewMultipleImages(input) {
    const files = Array.from(input.files);

    files.forEach(file => {
        const uniqueId = file.name + '_' + file.size;
        if (!selectedFiles.some(f => f.uniqueId === uniqueId)) {
            file.uniqueId = uniqueId;
            selectedFiles.push(file);
        }
    });

    refreshPreview(input);
}

function refreshPreview(input) {
    const previewContainer = document.getElementById('productImagesPreview');
    previewContainer.innerHTML = '';

    selectedFiles.forEach(file => {
        const reader = new FileReader();
        reader.onload = function(e) {
            const wrapper = document.createElement('div');
            wrapper.className = 'position-relative m-1';

            const img = document.createElement('img');
            img.src = e.target.result;
            img.className = 'img-thumbnail';
            img.style.maxWidth = '150px';

            const removeBtn = document.createElement('button');
            removeBtn.type = 'button';
            removeBtn.innerHTML = '&times;';
            removeBtn.className = 'btn btn-sm btn-danger position-absolute top-0 end-0';
            removeBtn.onclick = function() {
                selectedFiles = selectedFiles.filter(f => f.uniqueId !== file.uniqueId);
                updateFileInput(input);
                refreshPreview(input);
            };

            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            previewContainer.appendChild(wrapper);
        };
        reader.readAsDataURL(file);
    });

    updateFileInput(input);
    saveTempImages();
}

function updateFileInput(input) {
    const dataTransfer = new DataTransfer();
    selectedFiles.forEach(file => dataTransfer.items.add(file));
    input.files = dataTransfer.files;
}

function saveTempImages() {
    const readers = selectedFiles.map(file => new Promise(resolve => {
        const reader = new FileReader();
        reader.onload = e => resolve({ name: file.name, data: e.target.result });
        reader.readAsDataURL(file);
    }));

    Promise.all(readers).then(results => {
        sessionStorage.setItem('vendor_product_temp_images', JSON.stringify(results));
    });
}

function dataURLtoFile(dataurl, filename) {
    const arr = dataurl.split(','),
          mime = arr[0].match(/:(.*?);/)[1],
          bstr = atob(arr[1]),
          n = bstr.length,
          u8arr = new Uint8Array(n);
    for (let i = 0; i < n; i++) u8arr[i] = bstr.charCodeAt(i);
    return new File([u8arr], filename, {type:mime});
}
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
document.querySelectorAll('.ck-editor-multi-languages').forEach((element) => {
    ClassicEditor.create(element).catch(error => console.error(error));
});
</script>
@endsection
