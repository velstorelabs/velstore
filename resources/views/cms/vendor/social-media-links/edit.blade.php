

@extends('admin.vendor-views.layouts.master')

@section('title', 'Edit Social Media Link')

@section('content')
    <div class="container mt-4">
        <!-- Card Structure -->
        <div class="card">
            <div class="card-header card-header-bg text-white">
                <h6>{{ __('cms.social_media_links.edit') }}</h6>
            </div>
            <div class="card-body">

                <!-- Success/Error Messages -->
                @if(session('error'))
                    <div id="errorBar" class="alert alert-danger" role="alert">{{ session('error') }}</div>
                @endif

                <!-- Social Media Link Form -->
                <form action="{{ route('vendor.social-media-links.update', $socialMediaLink->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                 <!-- Social Media Type -->
                <div class="mb-3">
                    <label for="type" class="form-label">{{ __('cms.social_media_links.type') }}</label>
                    <select name="type" id="type" class="form-control @error('type') is-invalid @enderror" required>
                        <option value="" disabled>{{ __('cms.social_media_links.select_type') }}</option>
                        <option value="facebook" {{ old('type', $socialMediaLink->type) == 'facebook' ? 'selected' : '' }}> {{ __('cms.social_media_links.types.facebook') }}</option>
                        <option value="instagram" {{ old('type', $socialMediaLink->type) == 'instagram' ? 'selected' : '' }}> {{ __('cms.social_media_links.types.instagram') }}</option>
                        <option value="tiktok" {{ old('type', $socialMediaLink->type) == 'tiktok' ? 'selected' : '' }}> {{ __('cms.social_media_links.types.tiktok') }}</option>
                        <option value="youtube" {{ old('type', $socialMediaLink->type) == 'youtube' ? 'selected' : '' }}> {{ __('cms.social_media_links.types.youtube') }}</option>
                        <option value="x" {{ old('type', $socialMediaLink->type) == 'x' ? 'selected' : '' }}>  {{ __('cms.social_media_links.types.x') }}</option>
                    </select>
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                    <!-- Platform Name -->
                    <div class="mb-3">
                        <label for="platform" class="form-label">{{ __('cms.social_media_links.platform') }}</label>
                        <input type="text" name="platform" id="platform" class="form-control @error('platform') is-invalid @enderror" value="{{ old('platform', $socialMediaLink->platform) }}" required>
                        @error('platform') 
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Social Media Link -->
                    <div class="mb-3">
                        <label for="link" class="form-label">{{ __('cms.social_media_links.link') }}</label>
                        <input type="url" name="link" id="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('link', $socialMediaLink->link) }}" required>
                        @error('link') 
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Translations Section -->
                    <ul class="nav nav-tabs" id="languageTabs" role="tablist">
                        @foreach ($languages as $language)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $language->code }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $language->code }}" type="button" role="tab">{{ ucwords($language->name) }}</button>
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content mt-3" id="languageTabContent">
                        @foreach ($languages as $language)
                            <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $language->code }}" role="tabpanel">
                                <label class="form-label">{{ __('cms.social_media_links.translations.platform_name') }} ({{ $language->name }})</label>
                                <input type="text" name="languages[{{ $language->code }}][name]" class="form-control @error('languages.' . $language->code . '.name') is-invalid @enderror" value="{{ old('languages.' . $language->code . '.name', $socialMediaLink->translations->firstWhere('language_code', $language->code)->name ?? '') }}" required>
                                @error('languages.' . $language->code . '.name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        @endforeach
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="mt-3 btn btn-success">{{ __('cms.social_media_links.update') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
