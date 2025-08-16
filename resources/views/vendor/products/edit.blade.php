
@extends('vendor.layouts.master')

@section('content')
<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6>{{ __('cms.products.title_edit') }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('vendor.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- Language Tabs --}}
            <ul class="nav nav-tabs" role="tablist">
                @foreach($languages as $lang)
                    <li class="nav-item">
                        <button class="nav-link @if ($loop->first) active @endif"
                                data-bs-toggle="tab"
                                data-bs-target="#lang-{{ $lang->code }}"
                                type="button">
                            {{ ucwords($lang->name) }}
                        </button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content mt-3">
                @foreach($languages as $lang)
                    @php
                        $translation = $product->translations->firstWhere('language_code', $lang->code);
                    @endphp
                    <div class="tab-pane fade @if ($loop->first) show active @endif" id="lang-{{ $lang->code }}">
                        <label>{{ __('cms.products.product_name') }} ({{ $lang->code }})</label>
                        <input type="text" name="translations[{{ $lang->code }}][name]" class="form-control"
                               value="{{ old("translations.{$lang->code}.name", $translation?->name) }}">

                        <label class="mt-2">{{ __('cms.products.description') }} ({{ $lang->code }})</label>
                        <textarea class="form-control ck-editor-multi-languages"
                                  name="translations[{{ $lang->code }}][description]">{{ old("translations.{$lang->code}.description", $translation?->description) }}</textarea>
                    </div>
                @endforeach
            </div>
            {{-- Category and Brand --}}
            <div class="row mt-4">
                <div class="col-md-6">
                    <label>{{ __('cms.products.category') }}</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->translations->first()?->name ?? '—' }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label>{{ __('cms.products.brand') }}</label>
                    <select name="brand_id" class="form-control">
                        <option value="">{{ __('cms.products.no_brand') }}</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                {{ $brand->translations->first()?->name ?? '—' }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- Variants Section --}}
            <h5 class="mt-4">{{ __('cms.products.variants') }}</h5>
            <div id="variants-wrapper">
                @foreach($product->variants as $index => $variant)
                    @php
                        $variantTranslation = $variant->translations->first();
                        $sizeId = $variant->attributeValues->firstWhere('attribute.name', 'Size')?->id;
                        $colorId = $variant->attributeValues->firstWhere('attribute.name', 'Color')?->id;
                    @endphp
                    <div class="border p-3 mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label>{{ __('cms.products.variant_name_en') }}</label>
                                <input type="text" name="variants[{{ $index }}][name]" class="form-control"
                                       value="{{ $variantTranslation?->name }}">
                            </div>
                            <div class="col-md-4">
                                <label>{{ __('cms.products.price') }}</label>
                                <input type="number" step="0.01" name="variants[{{ $index }}][price]" class="form-control"
                                       value="{{ $variant->price }}">
                            </div>
                            <div class="col-md-4">
                                <label>{{ __('cms.products.discount_price') }}</label>
                                <input type="number" step="0.01" name="variants[{{ $index }}][discount_price]" class="form-control"
                                       value="{{ $variant->discount_price }}">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label>{{ __('cms.products.stock') }}</label>
                                <input type="number" name="variants[{{ $index }}][stock]" class="form-control"
                                       value="{{ $variant->stock }}">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label>{{ __('cms.products.sku') }}</label>
                                <input type="text" name="variants[{{ $index }}][SKU]" class="form-control"
                                       value="{{ $variant->SKU }}">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label>{{ __('cms.products.barcode') }}</label>
                                <input type="text" name="variants[{{ $index }}][barcode]" class="form-control"
                                       value="{{ $variant->barcode }}">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label>{{ __('cms.products.weight') }}</label>
                                <input type="text" name="variants[{{ $index }}][weight]" class="form-control"
                                       value="{{ $variant->weight }}">
                            </div>
                            <div class="col-md-4 mt-2">
                                <label>{{ __('cms.products.dimension') }}</label>
                                <input type="text" name="variants[{{ $index }}][dimensions]" class="form-control"
                                       value="{{ $variant->dimensions }}">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label>{{ __('cms.products.size') }}</label>
                                <select name="variants[{{ $index }}][size_id]" class="form-control">
                                    <option value="">{{ __('cms.products.select') }}</option>
                                    @foreach($sizes as $size)
                                        <option value="{{ $size->id }}" {{ $sizeId == $size->id ? 'selected' : '' }}>
                                            {{ $size->value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label>{{ __('cms.products.color') }}</label>
                                <select name="variants[{{ $index }}][color_id]" class="form-control">
                                    <option value="">{{ __('cms.products.select') }}</option>
                                    @foreach($colors as $color)
                                        <option value="{{ $color->id }}" {{ $colorId == $color->id ? 'selected' : '' }}>
                                            {{ $color->value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-sm btn-primary mt-3" id="add-variant-btn">{{ __('cms.products.add_variant') }}</button>                                  
            <div class="mt-3">
                <label class="form-label">{{ __('cms.products.images') }}</label>
                <div class="custom-file">
                    <label class="btn btn-primary" for="productImages">{{ __('cms.products.choose_file') }}</label>
                    <input type="file" name="images[]" class="form-control d-none" id="productImages" multiple accept="image/*" onchange="previewMultipleImages(this)">
                </div>
                <div id="productImagesPreview" class="mt-2 d-flex flex-wrap gap-2"></div>
            </div>
            <div id="removedImagesInputs"></div>

            @if ($product->images && $product->images->count())
                <div class="row mt-3">
                    @foreach ($product->images as $image)
                        <div class="col-md-3 mb-3" id="image_{{ $image->id }}">
                            <div class="border p-2 text-center">
                                <img src="{{ asset('storage/' . $image->image_url) }}" class="img-fluid" style="max-height: 150px;">
                                <p class="small text-muted">{{ $image->name }}</p>
                                <button type="button" class="btn btn-danger btn-sm" onclick="removeExistingImage({{ $image->id }})">
                                    {{ __('cms.products.remove') }}
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="mt-3 text-start">
                <button type="submit" class="btn btn-primary">{{ __('cms.products.update_product') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<script>
    let variantIndex = {{ count($product->variants) }};

    $('#add-variant-btn').click(function () {
        const template = $('#variant-template').html().replaceAll('__INDEX__', variantIndex);
        $('#variants-wrapper').append(template);
        variantIndex++;
    });
</script>

<script>
    let selectedFiles = [];

    function previewMultipleImages(input) {
        const files = Array.from(input.files);

        files.forEach(file => {
            if (!selectedFiles.some(f => f.name === file.name && f.size === file.size)) {
                selectedFiles.push(file);
            }
        });

        const previewContainer = document.getElementById('productImagesPreview');
        previewContainer.innerHTML = '';

        selectedFiles.forEach(file => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-thumbnail m-1';
                img.style.maxWidth = '150px';
                previewContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        });

        const dataTransfer = new DataTransfer();
        selectedFiles.forEach(file => dataTransfer.items.add(file));
        input.files = dataTransfer.files;
    }

    function removeExistingImage(imageId) {
        const imageDiv = document.getElementById('image_' + imageId);
        if (imageDiv) {
            imageDiv.remove();
        }

        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'remove_images[]';
        input.value = imageId;
        document.getElementById('removedImagesInputs').appendChild(input);
    }
</script>    

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    document.querySelectorAll('.ck-editor-multi-languages').forEach((element) => {
        ClassicEditor.create(element).catch(error => console.error(error));
    });
</script>
@endsection
