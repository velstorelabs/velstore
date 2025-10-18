@extends('admin.layouts.admin')
@section('content')

<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0">{{ __('cms.products.title_edit') }}</h6>
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
                        <label class="form-label">{{ __('cms.products.product_name') }} ({{ $language->code }})</label>
                        <input type="text" name="translations[{{ $language->code }}][name]" class="form-control" value="{{ old('translations.' . $language->code . '.name', $product->getTranslation('name', $language->code)) }}" required>
                        <label class="form-label">{{ __('cms.products.description') }} ({{ $language->code }})</label>
                        <textarea name="translations[{{ $language->code }}][description]" class="form-control ck-editor-multi-languages">{{ old('translations.' . $language->code . '.description', $product->getTranslation('description', $language->code)) }}</textarea>
                    </div>
                @endforeach
            </div>
            
            <div class="row mt-4">
                <div class="col-md-6">
                    <label class="form-label">{{ __('cms.products.category') }}</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == old('category_id', $product->category_id) ? 'selected' : '' }}>{{ $category->translation->name ?? '—' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ __('cms.products.brand') }}</label>
                    <select name="brand_id" class="form-control">
                        <option value="">{{ 'No Brand' }}</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}" {{ $brand->id == old('brand_id', $product->brand_id) ? 'selected' : '' }}>{{ $brand->translation->name ?? '—' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mt-4">
                <div class="col-md-6">
                    <label class="form-label">{{ __('cms.products.vendor') }}</label>
                    <select name="vendor_id" class="form-control" required>
                        <option value="">{{ __('cms.products.select_vendor') }}</option>
                        @foreach($vendors as $vendor)
                            <option value="{{ $vendor->id }}" {{ $product->vendor_id == $vendor->id ? 'selected' : '' }}>
                                {{ $vendor->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            </div>
            <div id="variants-wrapper">
                @foreach ($product->variants as $index => $variant)
                <div class="variant-item mt-4" id="variant_{{ $variant->id }}">
                    <h5>
                        {{ __('cms.products.variants') }} {{ $index + 0 }}
                        <button type="button"
                            class="btn btn-light rounded-circle shadow-sm border-0 d-flex align-items-center justify-content-center float-end remove-variant-btn"
                            style="width:36px; height:36px;"
                            onclick="removeVariant({{ $variant->id }})"
                            title="{{ __('cms.products.remove_variant') }}">
                            <i class="fa-solid fa-circle-xmark text-danger fs-6"></i>
                        </button>
                    </h5>           
                    <div class="row">
                        @php
                            $enTranslation = $variant->translations->firstWhere('language_code', 'en');
                        @endphp
                        <div class="col-md-4">
                            <label>{{ __('cms.products.variant_name_en') }}</label>
                            <input type="text"
                                   name="variants[{{ $index }}][name]"
                                   class="form-control"
                                   value="{{ old("variants.{$index}.name", $enTranslation?->name) }}"
                                   placeholder="Variant Name (EN)">
                        </div>
            
                        <div class="col-md-4">
                            <label>{{ __('cms.products.price') }}</label>
                            <input type="number" step="0.01" name="variants[{{ $index }}][price]" class="form-control" value="{{ $variant->price }}" />
                        </div>
                        
                        <div class="col-md-4">
                            <label>{{ __('cms.products.discount_price') }}</label>
                            <input type="number" step="0.01" name="variants[{{ $index }}][discount_price]" class="form-control" value="{{ $variant->discount_price }}" />
                        </div>
            
                        <div class="col-md-4 mt-2">
                            <label>{{ __('cms.products.stock') }}</label>
                            <input type="number" name="variants[{{ $index }}][stock]" class="form-control" value="{{ $variant->stock }}" />
                        </div>
            
                        <div class="col-md-4 mt-2">
                            <label>{{ __('cms.products.sku') }}</label>
                            <input type="text" name="variants[{{ $index }}][SKU]" class="form-control" value="{{ $variant->SKU }}" />
                        </div>
            
                        <div class="col-md-4 mt-2">
                            <label>{{ __('cms.products.barcode') }}</label>
                            <input type="text" name="variants[{{ $index }}][barcode]" class="form-control" value="{{ $variant->barcode }}" />
                        </div>
            
                        <div class="col-md-4 mt-2">
                            <label>{{ __('cms.products.weight') }}</label>
                            <input type="text" name="variants[{{ $index }}][weight]" class="form-control" placeholder="e.g., 1.2 kg" value="{{ old('variants.' . $index . '.weight', $variant->weight) }}" />
                        </div>
            
                        <div class="col-md-4 mt-2">
                            <label>{{ __('cms.products.dimension') }}</label>
                            <input type="text" name="variants[{{ $index }}][dimension]" class="form-control" placeholder="e.g., 10x20x5" value="{{ old('variants.' . $index . '.dimension', $variant->dimensions) }}" />
                        </div>
            
                        <div class="col-md-6 mt-2">
                            <label>{{ __('cms.products.size') }}</label>
                            <select name="variants[{{ $index }}][size_id]" class="form-control">
                                @foreach($sizes as $size)
                                    <option value="{{ $size->id }}" {{ $size->id == $variant->size_id ? 'selected' : '' }}>{{ $size->value }}</option>
                                @endforeach
                            </select>
                        </div>
            
                        <div class="col-md-6 mt-2">
                            <label>{{ __('cms.products.color') }}</label>
                            <select name="variants[{{ $index }}][color_id]" class="form-control">
                                @foreach($colors as $color)
                                    <option value="{{ $color->id }}" {{ $color->id == $variant->color_id ? 'selected' : '' }}>{{ $color->value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            @endforeach
           
            </div>

           <button type="button" id="add-variant-btn"
                class="btn btn-light rounded-circle shadow-sm border d-flex align-items-center justify-content-center mt-3"
                style="width:48px; height:48px;" title="{{ __('cms.products.add_variant') }}">
                <i class="fa-solid fa-plus text-primary fs-5"></i>
            </button>
                       
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
                       <div class="col-md-3 mb-3 position-relative" id="image_{{ $image->id }}">
                            <div class="border p-2 text-center position-relative" style="border-radius:8px;">
                                <img src="{{ asset('storage/' . $image->image_url) }}" class="img-fluid" style="max-height:150px; border-radius:8px;">
                                <p class="small text-muted mt-2">{{ $image->name }}</p>
                                <button type="button"
                                    class="btn btn-light rounded-circle shadow-sm border-0 d-flex align-items-center justify-content-center"
                                    style="width:36px; height:36px; position:absolute; right:8px; top:8px;"
                                    onclick="removeExistingImage({{ $image->id }})"
                                    title="{{ __('cms.products.remove') }}">
                                    <i class="fa-solid fa-circle-xmark text-danger fs-6"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="mt-4 text-start">
                <button type="submit" class="btn btn-primary">{{ __('cms.products.save_product') }}</button>
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

{{-- Variant Template --}}
<script type="text/template" id="variant-template">
    <div class="variant-item mt-4" id="variant_new___INDEX__">
        <h5>
            {{ __('cms.products.variants') }} __INDEX__
            <button type="button"
                class="btn btn-light rounded-circle shadow-sm border-0 d-flex align-items-center justify-content-center float-end remove-variant-btn"
                style="width:36px; height:36px;"
                onclick="this.closest('.variant-item').remove();"
                title="{{ __('cms.products.remove_variant') }}">
                <i class="fa-solid fa-circle-xmark text-danger fs-6"></i>
            </button>
        </h5>
        <div class="row">
            <div class="col-md-4">
                <label>{{ __('cms.products.variant_name_en') }}</label>
                <input type="text" name="variants[__INDEX__][name]" class="form-control" placeholder="Variant Name (EN)">
            </div>
            <div class="col-md-4">
                <label>{{ __('cms.products.price') }}</label>
                <input type="number" step="0.01" name="variants[__INDEX__][price]" class="form-control">
            </div>
            <div class="col-md-4">
                <label>{{ __('cms.products.discount_price') }}</label>
                <input type="number" step="0.01" name="variants[__INDEX__][discount_price]" class="form-control">
            </div>
            <div class="col-md-4 mt-2">
                <label>{{ __('cms.products.stock') }}</label>
                <input type="number" name="variants[__INDEX__][stock]" class="form-control">
            </div>
            <div class="col-md-4 mt-2">
                <label>{{ __('cms.products.sku') }}</label>
                <input type="text" name="variants[__INDEX__][SKU]" class="form-control">
            </div>
            <div class="col-md-4 mt-2">
                <label>{{ __('cms.products.barcode') }}</label>
                <input type="text" name="variants[__INDEX__][barcode]" class="form-control">
            </div>
            <div class="col-md-4 mt-2">
                <label>{{ __('cms.products.weight') }}</label>
                <input type="text" name="variants[__INDEX__][weight]" class="form-control" placeholder="e.g., 1.2 kg">
            </div>
            <div class="col-md-4 mt-2">
                <label>{{ __('cms.products.dimension') }}</label>
                <input type="text" name="variants[__INDEX__][dimension]" class="form-control" placeholder="e.g., 10x20x5">
            </div>
            <div class="col-md-6 mt-2">
                <label>{{ __('cms.products.size') }}</label>
                <select name="variants[__INDEX__][size_id]" class="form-control">
                    @foreach($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mt-2">
                <label>{{ __('cms.products.color') }}</label>
                <select name="variants[__INDEX__][color_id]" class="form-control">
                    @foreach($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
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
                const wrapper = document.createElement('div');
                wrapper.className = 'position-relative d-inline-block m-1';
                wrapper.style.border = '1px solid #ddd';
                wrapper.style.borderRadius = '8px';
                wrapper.style.padding = '4px';

                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-thumbnail';
                img.style.maxWidth = '150px';
                img.style.borderRadius = '8px';

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'btn btn-light rounded-circle shadow-sm border-0 d-flex align-items-center justify-content-center';
                removeBtn.style.width = '36px';
                removeBtn.style.height = '36px';
                removeBtn.style.position = 'absolute';
                removeBtn.style.right = '6px';
                removeBtn.style.top = '6px';
                removeBtn.title = "{{ __('cms.products.remove') }}";
                removeBtn.innerHTML = '<i class="fa-solid fa-circle-xmark text-danger fs-6"></i>';

                removeBtn.onclick = function() {
                    selectedFiles = selectedFiles.filter(f => f.name !== file.name || f.size !== file.size);
                    wrapper.remove();
                    const dataTransfer = new DataTransfer();
                    selectedFiles.forEach(f => dataTransfer.items.add(f));
                    input.files = dataTransfer.files;
                };

                wrapper.appendChild(img);
                wrapper.appendChild(removeBtn);
                previewContainer.appendChild(wrapper);
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

    function removeVariant(variantId) {
        const variantDiv = document.getElementById('variant_' + variantId);
        if (variantDiv) {
            variantDiv.remove();
        }

        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'remove_variants[]';
        input.value = variantId;
        document.querySelector('form').appendChild(input);
    }
</script>    

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    document.querySelectorAll('.ck-editor-multi-languages').forEach((element) => {
        ClassicEditor
            .create(element)
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection
