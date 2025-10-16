@extends('admin.layouts.admin')
@section('title', 'Create Attribute')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header card-header-bg text-white">
            <h6>{{ __('cms.attributes.title_create') }}</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.attributes.store') }}" method="POST">
                @csrf
                <!-- Attribute Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('cms.attributes.attribute_name') }}</label>
                    <input type="text" 
                           name="name" 
                           id="name" 
                           class="form-control @error('name') is-invalid @enderror" 
                           value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Dynamic Attribute Values -->
                <div class="mb-3">
                    <label class="form-label">{{ __('cms.attributes.attribute_values') }}</label>
                    <div id="attribute-values-container">
                        @php
                            $oldValues = old('values', ['']); // at least 1 input
                        @endphp
                       @foreach ($oldValues as $index => $val)
                            <div class="mb-2 value-group" style="position: relative;">
                                <input type="text"
                                    name="values[]"
                                    class="form-control pe-5 @error('values.' . $index) is-invalid @enderror"
                                    value="{{ $val }}"
                                    placeholder="Enter value {{ $index }}">

                                <button type="button"
                                    class="btn btn-light rounded-circle shadow-sm border-0 d-flex align-items-center justify-content-center remove-value"
                                    style="width:36px; height:36px; position:absolute; right:2px; top:50%; transform:translateY(-50%);"
                                    title="{{ __('cms.attributes.remove_value') }}">
                                    <i class="fa-solid fa-circle-xmark text-danger fs-6"></i>
                                </button>

                                @error('values.' . $index)
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        @endforeach
                    </div>
                    <button type="button" id="add-value" 
                            class="btn btn-light rounded-circle shadow-sm border d-flex align-items-center justify-content-center"
                            style="width:48px; height:48px;">
                        <i class="fa-solid fa-plus text-primary fs-5"></i>
                    </button>
                </div>

                <!-- Translations Section -->
                <div class="mb-3">
                    <label class="form-label">{{ __('cms.attributes.translations') }}</label>
                    <ul class="nav nav-tabs" id="languageTabs" role="tablist">
                        @foreach ($languages as $language)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $loop->first ? 'active' : '' }}" 
                                        id="{{ $language->code }}-tab" 
                                        data-bs-toggle="tab" 
                                        data-bs-target="#{{ $language->code }}" 
                                        type="button">
                                    {{ ucwords($language->name) }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content mt-3" id="languageTabContent">
                        @foreach ($languages as $language)
                            @php
                                $oldTranslations = old("translations.{$language->code}", array_fill(0, count($oldValues), ''));
                            @endphp
                            <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $language->code }}">
                                <div id="translation-container-{{ $language->code }}">
                                    @foreach ($oldTranslations as $tIndex => $tVal)
                                        <div class="input-group mb-2 translation-group">
                                            <input type="text" 
                                                   name="translations[{{ $language->code }}][]" 
                                                   class="form-control @error('translations.' . $language->code . '.' . $tIndex) is-invalid @enderror" 
                                                   value="{{ $tVal }}" 
                                                   placeholder="Enter {{ $language->name }} value {{ $tIndex }}">
                                            @error('translations.' . $language->code . '.' . $tIndex)
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success mt-3">{{ __('cms.attributes.save_attribute') }}</button>
            </form>
        </div>
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
document.addEventListener("DOMContentLoaded", function () {
    let removeText = "{{ __('cms.attributes.remove_value') }}";
    let languages = @json($languages->pluck('code')->toArray());
    let languageNames = @json($languages->pluck('name')->toArray());

    function updatePlaceholders() {
        let valueGroups = document.querySelectorAll("#attribute-values-container .value-group input");
        valueGroups.forEach((input, i) => {
            input.placeholder = "Enter value " + i;
        });

        languages.forEach((lang, index) => {
            let translationInputs = document.querySelectorAll("#translation-container-" + lang + " .translation-group input");
            translationInputs.forEach((input, i) => {
                input.placeholder = "Enter " + languageNames[index] + " value " + i;
            });
        });
    }

    document.getElementById("add-value").addEventListener("click", function () {
        let container = document.getElementById("attribute-values-container");
        let newValueGroup = document.createElement("div");
        newValueGroup.classList.add("mb-2", "value-group");
        newValueGroup.style.position = "relative";

        let valueInput = document.createElement("input");
        valueInput.type = "text";
        valueInput.name = "values[]";
        valueInput.classList.add("form-control", "pe-5");

        let removeValueBtn = document.createElement("button");
        removeValueBtn.type = "button";
        removeValueBtn.classList.add(
            "btn", "btn-light", "rounded-circle", "shadow-sm", "border-0",
            "d-flex", "align-items-center", "justify-content-center", "remove-value"
        );
        removeValueBtn.style.width = "36px";
        removeValueBtn.style.height = "36px";
        removeValueBtn.style.position = "absolute";
        removeValueBtn.style.right = "2px";
        removeValueBtn.style.top = "50%";
        removeValueBtn.style.transform = "translateY(-50%)";
        removeValueBtn.title = removeText;
        removeValueBtn.innerHTML = '<i class="fa-solid fa-circle-xmark text-danger fs-6"></i>';

        newValueGroup.appendChild(valueInput);
        newValueGroup.appendChild(removeValueBtn);
        container.appendChild(newValueGroup);

        languages.forEach((lang, index) => {
            let containerLang = document.getElementById("translation-container-" + lang);
            let newTranslationGroup = document.createElement("div");
            newTranslationGroup.classList.add("input-group", "mb-2", "translation-group");

            let input = document.createElement("input");
            input.type = "text";
            input.name = `translations[${lang}][]`;
            input.classList.add("form-control");

            newTranslationGroup.appendChild(input);
            containerLang.appendChild(newTranslationGroup);
        });

        updatePlaceholders();
    });

    document.addEventListener("click", function(e) {
       if (e.target.closest(".remove-value")) {
            let valueGroup = e.target.closest(".value-group");
            let index = Array.from(document.querySelectorAll("#attribute-values-container .value-group")).indexOf(valueGroup);

            if(valueGroup) valueGroup.remove();

            languages.forEach(lang => {
                let translations = document.querySelectorAll("#translation-container-" + lang + " .translation-group");
                if(translations[index]) translations[index].remove();
            });

            updatePlaceholders();
        }
    });

    updatePlaceholders();
});
</script>
@endsection
