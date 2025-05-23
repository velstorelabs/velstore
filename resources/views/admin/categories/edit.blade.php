
@extends('admin.layouts.admin')

@section('content')
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white">
            <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.categories.heading') }}</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <div class="row">
                    <ul class="nav nav-tabs" id="languageTabs" role="tablist">
                        @foreach($activeLanguages as $language)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $loop->first ? 'active' : '' }}" 
                                        id="{{ $language->name }}-tab" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#{{ $language->name }}" 
                                        type="button" role="tab">
                                        {{  ucwords($language->name) }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    
                    <div class="tab-content mt-3" id="languageTabContent">
                        @foreach($activeLanguages as $language)
                            @php
                                $translation = $category->translations->where('language_code', $language->code)->first();
                            @endphp
                            <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" 
                                 id="{{ $language->name }}" 
                                 role="tabpanel">
                                
                                <!-- Name Field -->
                                <label class="form-label">{{ __('cms.categories.name') }} ({{ $language->code }})</label>
                                <input type="text" 
                                       name="translations[{{ $language->code }}][name]" 
                                       class="form-control @error('translations.{{ $language->code }}.name') is-invalid @enderror" 
                                       value="{{ $translation->name ?? '' }}"
                                       required>
                                @error('translations.{{ $language->code }}.name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                
                                <!-- Description Field -->
                                <label class="form-label mt-2">{{ __('cms.categories.description') }} ({{ $language->code }})</label>
                                <textarea name="translations[{{ $language->code }}][description]" 
                                          class="form-control ck-editor-multi-languages @error('translations.{{ $language->code }}.description') is-invalid @enderror">
                                    {{ $translation->description ?? '' }}
                                </textarea>
                                @error('translations.{{ $language->code }}.description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <!-- Image Upload Field -->
                                <label class="form-label mt-2">{{ __('cms.categories.image') }} ({{ $language->code }})</label>
                                <div class="custom-file">
                                    <label class="btn btn-primary" for="image_file_{{ $language->code }}">{{ __('cms.categories.choose_file') }}</label>
                                    <input type="file" name="translations[{{ $language->code }}][image]" 
                                        accept="image/*" 
                                        class="form-control d-none @error('translations.{{ $language->code }}.image') is-invalid @enderror" 
                                        id="image_file_{{ $language->code }}" 
                                        onchange="previewImage(this, '{{ $language->code }}')">
                                </div>

                                <!-- Image Preview -->
                                <div id="image_preview_{{ $language->code }}" class="mt-2" 
                                     style="{{ isset($translation->image_url) ? 'display: block;' : 'display: none;' }}">
                                    <img id="image_preview_img_{{ $language->code }}" 
                                    src="{{ isset($translation->image_url) ? asset('storage/' . $translation->image_url) : '#' }}" 
                                         alt="{{ __('cms.categories.image_preview') }}" class="img-thumbnail" style="max-width: 200px;">
                                </div>

                                @error('translations.{{ $language->code }}.image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div> 
                        @endforeach
                    </div>
                </div>
                
                <button type="submit" class="mt-3 btn btn-primary">{{ cms_translate('categories.button') }}</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    function previewImage(input, langCode) {
        var file = input.files[0];
        var previewElement = document.getElementById('image_preview_' + langCode);
        var previewImage = document.getElementById('image_preview_img_' + langCode);

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
    }

    document.querySelectorAll('.ck-editor-multi-languages').forEach((element) => {
        ClassicEditor
            .create(element)
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection

