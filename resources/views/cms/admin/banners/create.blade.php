
@extends('cms.admin.layouts.admin')

@section('content')
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white">
            <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.banners.create_banner') }}</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
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
                  
                <!-- Banner Type Select -->
                <div class="form-group">
                    <label for="type">{{ __('cms.banners.banner_type') }}</label>
                    <select name="type" class="form-control" required>
                        <option value="promotion">{{ __('cms.banners.promotion') }}</option>
                        <option value="sale">{{ __('cms.banners.sale') }}</option>
                        <option value="seasonal">{{ __('cms.banners.seasonal') }}</option>
                        <option value="featured">{{ __('cms.banners.featured') }}</option>
                        <option value="announcement">{{ __('cms.banners.announcement') }}</option>
                    </select>
                </div>           
                <!-- Language Sections -->
                <div id="languages-container">
                    @if(!empty($languages) && count($languages) > 0)
                        <ul class="nav nav-tabs" id="languageTabs" role="tablist">
                            @foreach($languages as $index => $language)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ $loop->first ? 'active' : '' }}" 
                                            id="{{ $language->name }}-tab" 
                                            data-bs-toggle="tab" 
                                            data-bs-target="#{{ $language->name }}" 
                                            type="button" role="tab">
                                        {{ ucwords($language->name) }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content mt-3" id="languageTabContent">
                            @foreach($languages as $index => $language)
                                <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" 
                                     id="{{ $language->name }}" role="tabpanel">
                                    <div class="form-group">
                                        <label for="languages[{{ $index }}][title]">{{ __('cms.banners.title') }}</label>
                                        <input type="text" name="languages[{{ $index }}][title]" 
                                               class="form-control @error('languages.' . $index . '.title') is-invalid @enderror"
                                               value="{{ old('languages.' . $index . '.title') }}" required>
                                        @error('languages.' . $index . '.title') 
                                            <div class="invalid-feedback">{{ $message }}</div> 
                                        @enderror
                                    </div>                                   
                                    <!-- Description Field -->
                                    <div class="form-group">
                                        <label for="languages[{{ $index }}][description]">{{ __('cms.banners.description') }}</label>
                                        <textarea name="languages[{{ $index }}][description]" 
                                                  class="form-control @error('languages.' . $index . '.description') is-invalid @enderror"
                                                  rows="3">{{ old('languages.' . $index . '.description') }}</textarea>
                                        @error('languages.' . $index . '.description') 
                                            <div class="invalid-feedback">{{ $message }}</div> 
                                        @enderror
                                    </div>                                   
                                    <!-- Image Upload -->
                                    <label class="form-label mt-2">{{ __('cms.banners.image') }} ({{ $language->code }})</label>

                                    <!-- Custom File Input -->
                                    <div class="input-group">
                                        <!-- Translated Choose File Button -->
                                        <label for="image_file_{{ $language->code }}" class="btn btn-primary">
                                            {{ __('cms.banners.choose_file') }}
                                        </label>

                                        <!-- Hidden File Input -->
                                        <input type="file" id="image_file_{{ $language->code }}" name="languages[{{ $index }}][image]" 
                                            class="d-none form-control @error('languages.' . $index . '.image') is-invalid @enderror"
                                            accept="image/*"
                                            onchange="updateFileName(this, '{{ $language->code }}'); previewImage(this, '{{ $language->code }}')">

                                        <!-- Display Selected File Name -->
                                        <span id="file-name-{{ $language->code }}" class="ms-2 text-muted">                  
                                        </span>
                                    </div>

                                    @error('languages.' . $index . '.image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    <!-- Image Preview -->
                                    <div id="image_preview_{{ $language->code }}" class="mt-2" style="display: none;">
                                        <img id="image_preview_img_{{ $language->code }}" src="#" 
                                            alt="{{ __('cms.banners.image_preview') }}" class="img-thumbnail" style="max-width: 200px;">
                                    </div>

                                    <input type="hidden" name="languages[{{ $index }}][language_code]" value="{{ $language->code }}">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-danger">{{ __('cms.banners.no_languages_available') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('cms.banners.save') }}</button>
            </form>
        </div>
    </div>
<script>
function updateFileName(input, langCode) {
    let fileNameSpan = document.getElementById('file-name-' + langCode);
    if (input.files.length > 0) {
        fileNameSpan.textContent = input.files[0].name;
    } else {
        fileNameSpan.textContent = '{{ __("cms.banners.no_file_chosen") }}';
    }
}

function previewImage(input, langCode) {
    let previewDiv = document.getElementById('image_preview_' + langCode);
    let previewImg = document.getElementById('image_preview_img_' + langCode);

    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function (e) {
            previewImg.src = e.target.result;
            previewDiv.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        previewDiv.style.display = 'none';
    }
}

</script>

@endsection
