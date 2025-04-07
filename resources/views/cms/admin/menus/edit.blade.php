
@extends('cms.admin.layouts.admin')

@section('content')
<div class="container">

    <!-- Card-like Heading for "Edit Menu" -->
    <div class="card mt-4">
        <div class="card-header card-header-bg text-white">
            <h6>{{ __('cms.menus.edit_menu') }}</h6>
        </div>
    </div>

    <!-- Menu Form -->
    <div class="card mt-4">
        <div class="card-body">
            @if(session('error'))
                <div id="errorBar" class="alert alert-danger" role="alert">{{ session('error') }}</div>
            @endif

            <!-- Form for editing Menu -->
            <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Menu Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">{{ __('cms.menus.menu_title') }}</label>
                    <input type="text" 
                           name="title" 
                           id="title" 
                           class="form-control @error('title') is-invalid @enderror" 
                           value="{{ old('title', $menu->title) }}" 
                           required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success">{{ __('cms.menus.button_update') }}</button>
            </form>
        </div>
    </div>

</div>
@endsection
