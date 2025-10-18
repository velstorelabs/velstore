
@extends('admin.layouts.admin')

@section('content')
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white">
            <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.banners.edit_banner') }}</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
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

                <div class="form-group">
                    <label for="type">{{ __('cms.banners.banner_type') }}</label>
                    <select name="type" class="form-control" required>
                        <option value="promotion" {{ $banner->type == 'promotion' ? 'selected' : '' }}>{{ __('cms.banners.promotion') }}</option>
                        <option value="sale" {{ $banner->type == 'sale' ? 'selected' : '' }}>{{ __('cms.banners.sale') }}</option>
                        <option value="seasonal" {{ $banner->type == 'seasonal' ? 'selected' : '' }}>{{ __('cms.banners.seasonal') }}</option>
                        <option value="featured" {{ $banner->type == 'featured' ? 'selected' : '' }}>{{ __('cms.banners.featured') }}</option>
                        <option value="announcement" {{ $banner->type == 'announcement' ? 'selected' : '' }}>{{ __('cms.banners.announcement') }}</option>
                    </select>
                </div>

                <div id="languages-container" class="mt-4">
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
                                @php
                                    $bannerTranslation = $translations[$language->code] ?? new stdClass();
                                @endphp
                                <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" 
                                     id="{{ $language->name }}" role="tabpanel">
                                    <div class="form-group">
                                        <label for="languages[{{ $index }}][title]">{{ __('cms.banners.title') }}</label>
                                        <input type="text" name="languages[{{ $index }}][title]" 
                                               class="form-control @error('languages.' . $index . '.title') is-invalid @enderror"
                                               value="{{ old('languages.' . $index . '.title', $bannerTranslation->title ?? '') }}" required>
                                        @error('languages.' . $index . '.title') 
                                            <div class="invalid-feedback">{{ $message }}</div> 
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="languages[{{ $index }}][description]">{{ __('cms.banners.description') }}</label>
                                        <textarea name="languages[{{ $index }}][description]" 
                                                  class="form-control @error('languages.' . $index . '.description') is-invalid @enderror"
                                                  rows="3">{{ old('languages.' . $index . '.description', $bannerTranslation->description ?? '') }}</textarea>
                                        @error('languages.' . $index . '.description') 
                                            <div class="invalid-feedback">{{ $message }}</div> 
                                        @enderror
                                    </div> 
                                                                 
                                    <label class="form-label mt-2">{{ __('cms.banners.image') }} ({{ $language->code }})</label>

                                    <div class="input-group">
                                        <label for="image_file_{{ $language->code }}" class="btn btn-primary">
                                            {{ __('cms.banners.choose_file') }}
                                        </label>
                                        <input type="file" id="image_file_{{ $language->code }}" name="languages[{{ $index }}][image]" 
                                            class="d-none form-control @error('languages.' . $index . '.image') is-invalid @enderror"
                                            accept="image/*"
                                            onchange="updateFileName(this, '{{ $language->code }}'); previewImage(this, '{{ $language->code }}')">

                                        <span id="file-name-{{ $language->code }}" class="ms-2 text-muted">
                                            @if (!empty($bannerTranslation->image))
                                                {{ basename($bannerTranslation->image) }}
                                            @else
                                               
                                            @endif
                                        </span>
                                    </div>

                                    @error('languages.' . $index . '.image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                        <img id="image_preview_img_{{ $language->code }}" 
                                        src="{{ !empty($bannerTranslation->image_url) ? Storage::url($bannerTranslation->image_url) : asset('images/placeholder.png') }}" 
                                        alt="{{ __('cms.banners.image_preview') }}" 
                                        class="img-thumbnail" style="max-width: 100px;">                                  
                                    <input type="hidden" name="languages[{{ $index }}][language_code]" value="{{ $language->code }}"> 

                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-danger">{{ __('cms.banners.no_languages_available') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ __('cms.banners.save') }}</button>
                <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary mt-3">{{ __('cms.banners.button_back') }}</a>
            </form>
        </div>
    </div>
<script>
function updateFileName(input, langCode) {
    let fileNameSpan = document.getElementById('file-name-' + langCode);
    fileNameSpan.textContent = input.files.length > 0 ? input.files[0].name : '{{ __("cms.banners.no_file_chosen") }}';
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
    }
}

</script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const editors = {};

    document.querySelectorAll('textarea[name^="languages"]').forEach((el) => {
        const id = el.getAttribute('name').replace(/[\[\]\.]/g, '_'); 
        el.id = id;

        ClassicEditor.create(el)
            .then(editor => {
                editors[id] = editor;
            })
            .catch(error => {
                console.error('CKEditor initialization error:', error);
            });
    });

    document.querySelector('form').addEventListener('submit', function () {
        for (const id in editors) {
            const editor = editors[id];
            if (editor) {
                const textarea = document.getElementById(id);
                if (textarea) textarea.value = editor.getData();
            }
        }
    });
});
</script>
@endsection
