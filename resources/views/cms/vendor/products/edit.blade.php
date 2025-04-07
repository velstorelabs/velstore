
@extends('admin.vendor-views.layouts.master')
@section('content')
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white">
            <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.products.heading') }}</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('vendor.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
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
                    @foreach($languages as $language)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $language->code }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $language->code }}" type="button" role="tab">{{ ucwords($language->name) }}</button>
                        </li>
                    @endforeach
                </ul>
                
                <div class="tab-content mt-3" id="languageTabContent">
                    @foreach($languages as $language)
                    <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $language->code }}" role="tabpanel">
                        <label class="form-label">{{ __('cms.products.name') }} ({{ $language->code }})</label>
                        <input type="text" name="translations[{{ $language->code }}][name]" class="form-control" value="{{ $product->getTranslation('name', $language->code) }}" required>
                        <label class="form-label">{{ __('cms.products.description') }} ({{ $language->code }})</label>
                        <textarea name="translations[{{ $language->code }}][description]" class="form-control ck-editor-multi-languages">{{ $product->getTranslation('description', $language->code) }}</textarea>
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
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_type">{{ __('cms.products.product_type') }}</label>
                            <select name="product_type" id="product_type" class="form-control" required>
                                <option value="physical" {{ $product->product_type == 'physical' ? 'selected' : '' }}>{{ __('cms.products.physical') }}</option>
                                <option value="digital" {{ $product->product_type == 'digital' ? 'selected' : '' }}>{{ __('cms.products.digital') }}</option>
                                <option value="service" {{ $product->product_type == 'service' ? 'selected' : '' }}>{{ __('cms.products.service') }}</option>
                            </select>
                        </div>
                    </div>
                                       
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">{{ __('cms.products.price') }}</label>
                            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="weight">{{ __('cms.products.weight') }}</label>
                            <input type="text" name="weight" id="weight" class="form-control" value="{{ $product->weight }}" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dimensions">{{ __('cms.products.dimensions') }}</label>
                            <input type="text" name="dimensions" id="dimensions" class="form-control" value="{{ $product->dimensions }}" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="currency">{{ __('cms.products.currency') }}</label>
                            <input type="text" name="currency" id="currency" class="form-control" value="{{ $product->currency }}" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="stock">{{ __('cms.products.stock') }}</label>
                            <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="SKU">{{ __('cms.products.sku') }}</label>
                            <input type="text" name="SKU" id="SKU" class="form-control" value="{{ $product->SKU }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image_type">{{ __('cms.products.image_type') }}</label>
                            <select name="image_type" id="image_type" class="form-control" required>
                                <option value="thumb" {{ old('image_type', $product->image_type) == 'thumb' ? 'selected' : '' }}>
                                    {{ __('cms.products.thumbnail') }}
                                </option>
                                <option value="slide" {{ old('image_type', $product->image_type) == 'slide' ? 'selected' : '' }}>
                                    {{ __('cms.products.slide') }}
                                </option>
                            </select>
                            @error('image_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image_url">{{ __('cms.products.image_preview') }}</label>
                            
                            <!-- Custom File Input -->
                            <div class="custom-file">
                                <label class="btn btn-primary" for="image_url">{{ __('cms.products.choose_file') }}</label>
                                <input type="file" name="image_url" id="image_url" class="d-none" accept="image/*">
                            </div>
                    
                            <!-- Image Preview -->
                            <img src="{{ isset($imageUrl) && $imageUrl ? asset('storage/' . $imageUrl) : asset('default-placeholder.png') }}" 
                                 id="product_image_preview" 
                                 class="mt-2 img-thumbnail" 
                                 width="100">
                        </div>
                    </div>
                </div>
            <div class="col-md-12 text-start">
                <div class="d-inline-block">
                    <button type="submit" class=" btn btn-primary btn-sm">{{ __('cms.products.update_product') }}</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
<script>
    document.getElementById('image_url').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var previewImage = document.getElementById('product_image_preview');
        var chooseFileLabel = document.querySelector("label[for='image_url']");

        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
            };
            reader.readAsDataURL(file);

            // Show file name in the label (translated)
            chooseFileLabel.textContent = file.name;
        } else {
            chooseFileLabel.textContent = "{{ __('cms.products.choose_file') }}";
        }
    });
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
