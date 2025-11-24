@extends('admin.layouts.admin')
@section('content')
<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.brands.heading') }}</h6>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data" id="brandForm">
            @csrf

            {{-- Hidden Base64 Preview Input --}}
            <input type="hidden" name="logo_preview_base64" id="logo_preview_base64" value="{{ old('logo_preview_base64') }}">

            <div class="row">
                {{-- Language Tabs --}}
                <ul class="nav nav-tabs" id="languageTabs" role="tablist">
                    @foreach($activeLanguages as $language)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                    id="{{ $language->name }}-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#{{ $language->name }}"
                                    type="button"
                                    role="tab">
                                {{ ucwords($language->name) }}
                            </button>
                        </li>
                    @endforeach
                </ul>

                {{-- Language Input Panels --}}
                <div class="tab-content mt-3" id="languageTabContent">
                    @foreach($activeLanguages as $language)
                        <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $language->name }}" role="tabpanel">

                            <label class="form-label">{{ __('cms.brands.name') }} ({{ $language->code }})</label>
                            <input type="text"
                                   name="translations[{{ $language->code }}][name]"
                                   class="form-control @error("translations.{$language->code}.name") is-invalid @enderror"
                                   value="{{ old("translations.{$language->code}.name") }}">
                            @error("translations.{$language->code}.name")
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror

                            <label class="form-label mt-3">{{ __('cms.brands.description') }} ({{ $language->code }})</label>
                            <textarea name="translations[{{ $language->code }}][description]"
                                      class="form-control ck-editor-multi-languages @error("translations.{$language->code}.description") is-invalid @enderror">{{ old("translations.{$language->code}.description") }}</textarea>
                            @error("translations.{$language->code}.description")
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    @endforeach  
                </div>

                {{-- Brand Logo --}}
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <label for="logo_url">{{ __('cms.brands.logo') }}</label>

                        <div class="custom-file">
                            <label class="btn btn-primary" for="logo_file">{{ __('cms.brands.choose_file') }}</label>
                            <input type="file" name="logo_url" accept="image/*" class="form-control d-none" id="logo_file">
                        </div>

                        {{-- Image Preview --}}
                        <div class="mt-2" id="logo_preview" style="{{ old('logo_preview_base64') ? 'display:block;' : 'display:none;' }}">
                            <img id="logo_preview_img" src="{{ old('logo_preview_base64') }}" class="img-thumbnail" width="100">
                        </div>

                        @error('logo_url')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            <small class="text-danger">Please re-upload the image.</small>
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="mt-3 btn btn-primary">{{ __('cms.brands.create') }}</button>
        </form>
    </div>
</div>
@endsection

@section('js')
{{-- Show correct language tab after validation --}}
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

{{-- Image Preview + Base64 Save --}}
<script>
document.getElementById('logo_file').addEventListener('change', function(event) {
    var file = event.target.files[0];
    var previewElement = document.getElementById('logo_preview');
    var previewImage = document.getElementById('logo_preview_img');
    var hiddenInput = document.getElementById('logo_preview_base64');

    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            previewElement.style.display = 'block';
            previewImage.src = e.target.result;
            hiddenInput.value = e.target.result;
        };
        reader.readAsDataURL(file);
    } else {
        previewElement.style.display = 'none';
        hiddenInput.value = '';
    }
});

// Convert Base64 back to file before submitting
document.getElementById('brandForm').addEventListener('submit', function(e) {
    var logoBase64 = document.getElementById('logo_preview_base64').value;
    if (logoBase64) {
        function dataURLtoBlob(dataurl) {
            var arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
                bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
            while(n--){
                u8arr[n] = bstr.charCodeAt(n);
            }
            return new Blob([u8arr], {type:mime});
        }

        var fileInput = document.getElementById('logo_file');
        var blob = dataURLtoBlob(logoBase64);
        var file = new File([blob], "logo.png", {type: blob.type});
        
        var dataTransfer = new DataTransfer();
        dataTransfer.items.add(file);
        fileInput.files = dataTransfer.files;
    }
});
</script>

{{-- CKEditor Init --}}
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
document.querySelectorAll('.ck-editor-multi-languages').forEach((element) => {
    ClassicEditor.create(element).catch(error => console.error(error));
});
</script>
@endsection
