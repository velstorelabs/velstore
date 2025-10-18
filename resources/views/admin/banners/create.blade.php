@extends('admin.layouts.admin')

@section('content')
<div class="card mt-4">
    <div class="card-header card-header-bg text-white">
        <h6 class="d-flex align-items-center mb-0 dt-heading">{{ __('cms.banners.create_banner') }}</h6>
    </div>
    <div class="card-body">
        <form id="bannerForm" action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Hidden input to remember active tab --}}
            <input type="hidden" name="active_tab" id="active_tab" value="{{ old('active_tab', $languages->first()->code) }}">

            {{-- Banner type --}}
            <div class="form-group">
                <label for="type">{{ __('cms.banners.banner_type') }}</label>
                <select name="type" class="form-control @error('type') is-invalid @enderror" required>
                    <option value="promotion" {{ old('type') === 'promotion' ? 'selected' : '' }}>{{ __('cms.banners.promotion') }}</option>
                    <option value="sale" {{ old('type') === 'sale' ? 'selected' : '' }}>{{ __('cms.banners.sale') }}</option>
                    <option value="seasonal" {{ old('type') === 'seasonal' ? 'selected' : '' }}>{{ __('cms.banners.seasonal') }}</option>
                    <option value="featured" {{ old('type') === 'featured' ? 'selected' : '' }}>{{ __('cms.banners.featured') }}</option>
                    <option value="announcement" {{ old('type') === 'announcement' ? 'selected' : '' }}>{{ __('cms.banners.announcement') }}</option>
                </select>
                @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Language tabs --}}
            <ul class="nav nav-tabs mt-4" role="tablist">
                @foreach($languages as $language)
                    <li class="nav-item">
                        <button type="button"
                                class="nav-link {{ old('active_tab', $languages->first()->code) === $language->code ? 'active' : '' }}"
                                data-bs-toggle="tab"
                                data-bs-target="#{{ $language->code }}"
                                data-lang="{{ $language->code }}">
                            {{ ucwords($language->name) }}
                        </button>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content mt-3">
                @foreach($languages as $language)
                    <div class="tab-pane fade show {{ old('active_tab', $languages->first()->code) === $language->code ? 'active' : '' }}" id="{{ $language->code }}">
                        
                        {{-- Title --}}
                        <label class="form-label">{{ __('cms.banners.title') }} ({{ $language->code }})</label>
                        <input type="text" 
                               name="languages[{{ $language->code }}][title]" 
                               class="form-control @error('languages.' . $language->code . '.title') is-invalid @enderror"
                               value="{{ old('languages.' . $language->code . '.title') }}">
                        @error('languages.' . $language->code . '.title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        {{-- Description --}}
                        <label class="form-label mt-2">{{ __('cms.banners.description') }} ({{ $language->code }})</label>
                        <textarea id="description_{{ $language->code }}"
                                name="languages[{{ $language->code }}][description]"
                                class="form-control ck-editor-multi-languages @error('languages.' . $language->code . '.description') is-invalid @enderror"
                                rows="3">{{ old('languages.' . $language->code . '.description') }}</textarea>
                        @error('languages.' . $language->code . '.description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror


                        {{-- Image --}}
                        <label class="form-label mt-2">{{ __('cms.banners.image') }} ({{ $language->code }})</label>
                        <div class="custom-file">
                            <label class="btn btn-primary" for="image_file_{{ $language->code }}">{{ __('cms.banners.choose_file') }}</label>
                            <input type="file"
                                   id="image_file_{{ $language->code }}"
                                   name="languages[{{ $language->code }}][image]"
                                   accept="image/*"
                                   class="form-control d-none @error('languages.' . $language->code . '.image') is-invalid @enderror"
                                   onchange="previewImage(this, '{{ $language->code }}')">
                        </div>

                        {{-- Hidden base64 (keeps preview after validation) --}}
                        <input type="hidden" id="image_base64_{{ $language->code }}" 
                               name="languages[{{ $language->code }}][image_base64]" 
                               value="{{ old('languages.' . $language->code . '.image_base64') }}">

                        {{-- Preview --}}
                        <div id="image_preview_{{ $language->code }}" class="mt-2" 
                             style="{{ old('languages.' . $language->code . '.image_base64') ? '' : 'display:none;' }}">
                            <img id="image_preview_img_{{ $language->code }}" 
                                 src="{{ old('languages.' . $language->code . '.image_base64') ?: '#' }}" 
                                 class="img-thumbnail" style="max-width:200px;">
                        </div>
                        @error('languages.' . $language->code . '.image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary mt-3">{{ __('cms.banners.save') }}</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script>
function previewImage(input, langCode) {
    var file = input.files[0];
    var previewElement = document.getElementById('image_preview_' + langCode);
    var previewImage = document.getElementById('image_preview_img_' + langCode);
    var hiddenInput = document.getElementById('image_base64_' + langCode);

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
}

function base64ToFile(dataurl, filename) {
    if (!dataurl || dataurl.indexOf(',') === -1) throw new Error('Invalid base64 data');
    var arr = dataurl.split(',');
    var mimeMatch = arr[0].match(/data:(.*);base64/);
    if (!mimeMatch) throw new Error('Invalid mime in base64 data');
    var mime = mimeMatch[1];
    var bstr = atob(arr[1]);
    var n = bstr.length;
    var u8arr = new Uint8Array(n);
    for (var i = 0; i < n; i++) {
        u8arr[i] = bstr.charCodeAt(i);
    }
    var ext = mime.split('/')[1].split('+')[0];
    if (ext === 'jpeg') ext = 'jpg';
    var fname = filename + '.' + ext;
    return new File([u8arr], fname, { type: mime });
}

document.addEventListener("DOMContentLoaded", function () {
    const LANG_CODES = @json($languages->pluck('code')->toArray());
    const serverActive = @json(old('active_tab', $languages->first()->code));
    const activeTabInput = document.getElementById('active_tab');

    if (serverActive) {
        localStorage.setItem('banner_active_tab', serverActive);
    }

    let savedTab = localStorage.getItem('banner_active_tab') || serverActive || LANG_CODES[0];
    if (savedTab) {
        let trigger = document.querySelector(`button[data-bs-target="#${savedTab}"]`);
        if (trigger) new bootstrap.Tab(trigger).show();
        activeTabInput.value = savedTab;
    }

    document.querySelectorAll('[data-bs-toggle="tab"]').forEach(function (tab) {
        tab.addEventListener('shown.bs.tab', function (e) {
            let lang = e.target.getAttribute('data-lang');
            localStorage.setItem('banner_active_tab', lang);
            activeTabInput.value = lang;
        });
        tab.addEventListener('click', function () {
            let lang = tab.getAttribute('data-lang');
            localStorage.setItem('banner_active_tab', lang);
            activeTabInput.value = lang;
        });
    });

    @if ($errors->any())
        let firstError = document.querySelector('.is-invalid');
        if (firstError) {
            let tabPane = firstError.closest('.tab-pane');
            if (tabPane) {
                let tabId = tabPane.getAttribute('id');
                let trigger = document.querySelector(`button[data-bs-target="#${tabId}"]`);
                if (trigger) {
                    new bootstrap.Tab(trigger).show();
                    localStorage.setItem('banner_active_tab', tabId);
                    activeTabInput.value = tabId;
                }
            }
        }
    @endif

    document.getElementById('bannerForm').addEventListener('submit', function (e) {
        let finalTab = localStorage.getItem('banner_active_tab') || activeTabInput.value || LANG_CODES[0];
        activeTabInput.value = finalTab;

        for (const code of LANG_CODES) {
            try {
                let fileInput = document.getElementById('image_file_' + code);
                let base64Input = document.getElementById('image_base64_' + code);
                if (fileInput && fileInput.files.length === 0 && base64Input && base64Input.value) {
                    let f = base64ToFile(base64Input.value, 'banner_' + code + '_' + Date.now());
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(f);
                    fileInput.files = dataTransfer.files;
                }
            } catch (err) {
                console.warn('Failed to convert base64 -> File for', code, err);
            }
        }
    });
});
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
const LANG_CODES = {!! json_encode($languages->pluck('code')) !!};
const CKEDITORS = {};

document.querySelectorAll('.ck-editor-multi-languages').forEach((el) => {
    const id = el.id;
    ClassicEditor.create(el)
        .then(editor => {
            CKEDITORS[id] = editor;
        })
        .catch(error => {
            console.error('CKEditor init error', error);
        });
});

document.getElementById('bannerForm').addEventListener('submit', function (e) {
    for (const code of LANG_CODES) {
        const textareaId = 'description_' + code;
        const editor = CKEDITORS[textareaId];
        if (editor) {
            const textarea = document.getElementById(textareaId);
            if (textarea) textarea.value = editor.getData();
        }
    }
});
</script>
@endsection
