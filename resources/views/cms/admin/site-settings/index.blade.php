<!-- resources/views/admin/site-settings/index.blade.php -->

@extends('cms.admin.layouts.admin')

@section('content')
    <div class="card mt-4">
        <div class="card-header bg-primary text-white">
            <h6>Site Settings</h6>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('admin.site-settings.edit') }}" class="btn btn-primary float-end mb-3">Edit Settings</a>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Setting</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Site Name</td>
                        <td>{{ $settings->site_name ?? 'Not set' }}</td>
                    </tr>
                    <tr>
                        <td>Tagline</td>
                        <td>{{ $settings->tagline ?? 'Not set' }}</td>
                    </tr>
                    <tr>
                        <td>Meta Title</td>
                        <td>{{ $settings->meta_title ?? 'Not set' }}</td>
                    </tr>
                    <tr>
                        <td>Meta Description</td>
                        <td>{{ $settings->meta_description ?? 'Not set' }}</td>
                    </tr>
                    <tr>
                        <td>Meta Keywords</td>
                        <td>{{ $settings->meta_keywords ?? 'Not set' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
