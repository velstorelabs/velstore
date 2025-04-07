
@extends('admin.vendor-views.layouts.master')
@section('content')
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white">
            <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.products.heading') }}</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('vendor.products.store') }}" method="POST" enctype="multipart/form-data">
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category_id">{{ __('cms.products.category') }}</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="" disabled>{{ __('cms.products.select_category') }}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_type">{{ __('cms.products.product_type') }}</label>
                            <select name="product_type" id="product_type" class="form-control" required>
                                <option value="" disabled>{{ __('cms.products.select_product_type') }}</option>
                                <option value="physical" {{ old('product_type') == 'physical' ? 'selected' : '' }}>{{ __('cms.products.physical') }}</option>
                                <option value="digital" {{ old('product_type') == 'digital' ? 'selected' : '' }}>{{ __('cms.products.digital') }}</option>
                                <option value="service" {{ old('product_type') == 'service' ? 'selected' : '' }}>{{ __('cms.products.service') }}</option>
                            </select>
                            @error('product_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">{{ __('cms.products.price') }}</label>
                            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">{{ __('cms.products.weight') }}</label>
                            <input type="text" name="weight" id="weight" class="form-control" value="{{ old('weight') }}" required>
                            @error('weight')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="stock">{{ __('cms.products.stock') }}</label>
                            <input type="number" name="stock" id="stock" class="form-control" value="{{ old('stock') }}" required>
                            @error('stock')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="currency">{{ __('cms.products.currency') }}</label>
                            <input type="text" name="currency" id="currency" class="form-control" value="{{ old('currency') }}" required>
                            @error('currency')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dimensions">{{ __('cms.products.dimensions') }}</label>
                            <input type="text" name="dimensions" id="dimensions" class="form-control" value="{{ old('dimensions') }}" required>
                            @error('dimensions')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                    <!-- SKU Field -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="SKU">{{ __('cms.products.sku') }}</label>
                            <input type="text" name="SKU" id="SKU" class="form-control" value="{{ old('SKU') }}" required>
                            @error('SKU')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image_type">{{ __('cms.products.image_type') }}</label>
                            <select name="image_type" id="image_type" class="form-control" required>
                                <option value="thumb" {{ old('image_type') == 'thumb' ? 'selected' : '' }}>{{ __('cms.products.thumbnail') }}</option>
                                <option value="slide" {{ old('image_type') == 'slide' ? 'selected' : '' }}>{{ __('cms.products.slide') }}</option>
                            </select>
                            @error('image_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_image_url">{{ __('cms.products.image') }}</label>
                            <div class="custom-file">
                                <label class="btn btn-primary" for="product_image_file">{{ __('cms.products.choose_file') }}</label>
                                <input type="file" name="product_image_url" accept="image/*" class="form-control d-none" id="product_image_file">
                            </div>
                            <div class="mt-2" id="product_image_preview" style="display:none;">
                                <img id="product_image_preview_img" src="" alt="Selected Product Image" class="img-thumbnail" width="100">
                            </div>
                            @error('product_image_url')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-start">
                    <button type="submit" class="mt-3 btn btn-primary">{{ __('cms.products.save') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
<script>
    document.getElementById('product_image_file').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var previewElement = document.getElementById('product_image_preview');
        var previewImage = document.getElementById('product_image_preview_img');

        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                previewElement.style.display = 'block';
                previewImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        } else {
            previewElement.style.display = 'none';
        }
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


