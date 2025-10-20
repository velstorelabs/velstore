@extends('admin.layouts.admin')

@section('content')
<div class="d-flex justify-content-end align-items-center" style="min-height: 80vh;">
    <div class="card shadow-sm border-0" 
         style="width: 300px; margin-right: 40px; transform: translateY(-40px); border-radius: 12px;">
        <div class="card-header card-header-bg text-white text-center py-2"
             style="font-size: 0.9rem; font-weight: 600;">
            Edit Profile
        </div>

        <div class="card-body bg-white p-3">
            @if(session('success'))
                <div class="alert alert-success py-1 px-2 small mb-2 text-center">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('admin.profile.update') }}" 
                  enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PATCH')

                <div class="text-center mb-2">
                    <img src="{{ $admin->profile_image 
                        ? asset('storage/' . $admin->profile_image) 
                        : 'https://ui-avatars.com/api/?name=' . urlencode($admin->name) . '&background=0d6efd&color=fff&size=64' }}"
                        alt="Profile" class="rounded-circle shadow-sm mb-1"
                        style="width:55px; height:55px; object-fit:cover;">
                    <input class="form-control form-control-sm bg-light border-0 rounded-pill mx-auto"
                           type="file" id="profile_image" name="profile_image" accept="image/*"
                           style="max-width:200px; font-size:0.75rem;">
                    @error('profile_image')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-1">
                    <input type="text" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="name" name="name" value="{{ old('name', $admin->name) }}" placeholder="Name">
                    @error('name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-1">
                    <input type="email" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="email" name="email" value="{{ old('email', $admin->email) }}" placeholder="Email">
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-1">
                    <input type="text" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="phone" name="phone" value="{{ old('phone', $admin->phone) }}" placeholder="Phone">
                    @error('phone')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <hr class="my-2">

                <div class="mb-1">
                    <input type="password" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="current_password" name="current_password" placeholder="Current Password">
                    @error('current_password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-1">
                    <input type="password" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="password" name="password" placeholder="New Password">
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <input type="password" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="password_confirmation" name="password_confirmation" placeholder="Confirm New Password">
                    @error('password_confirmation')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-sm btn-primary rounded-pill px-3 py-1 d-flex align-items-center ms-auto" 
                            id="saveProfileBtn" style="font-size:0.8rem;">
                        <span class="spinner-border spinner-border-sm me-2 d-none" id="profileLoader" role="status"></span>
                        Save
                    </button>
                </div>
            </form>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const form = document.querySelector('form[action="{{ route('admin.profile.update') }}"]');
                    const btn = document.getElementById('saveProfileBtn');
                    const loader = document.getElementById('profileLoader');
                    form.addEventListener('submit', function() {
                        btn.setAttribute('disabled', 'disabled');
                        loader.classList.remove('d-none');
                    });
                });
            </script>
        </div>
    </div>
</div>
@endsection
