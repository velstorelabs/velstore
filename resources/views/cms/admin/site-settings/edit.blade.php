@extends('cms.admin.layouts.admin')

@section('content')

    <div class="card mt-4">
        <div class="card-header bg-primary text-white">
            <h6>Edit Site Settings</h6>
        </div>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.site-settings.update') }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Site Name -->
                <div class="form-group">
                    <label for="site_name">Site Name</label>
                    <input type="text" name="site_name" class="form-control" value="{{ old('site_name', $settings->site_name ?? '') }}" required>
                </div>

                <!-- Tagline -->
                <div class="form-group">
                    <label for="tagline">Tagline</label>
                    <input type="text" name="tagline" class="form-control" value="{{ old('tagline', $settings->tagline ?? '') }}">
                </div>

                <!-- Meta Title -->
                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $settings->meta_title ?? '') }}">
                </div>

                <!-- Meta Description -->
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea name="meta_description" class="form-control">{{ old('meta_description', $settings->meta_description ?? '') }}</textarea>
                </div>

                <!-- Meta Keywords -->
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $settings->meta_keywords ?? '') }}">
                </div>

                <!-- Contact Email -->
                <div class="form-group">
                    <label for="contact_email">Contact Email</label>
                    <input type="email" name="contact_email" class="form-control" value="{{ old('contact_email', $settings->contact_email ?? '') }}">
                </div>

                <!-- Contact Phone -->
                <div class="form-group">
                    <label for="contact_phone">Contact Phone</label>
                    <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone', $settings->contact_phone ?? '') }}">
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address', $settings->address ?? '') }}">
                </div>

                <!-- Footer Text -->
                <div class="form-group">
                    <label for="footer_text">Footer Text</label>
                    <textarea name="footer_text" class="form-control">{{ old('footer_text', $settings->footer_text ?? '') }}</textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success mt-3">Update Settings</button>
            </form>
        </div>
    </div>

@endsection
