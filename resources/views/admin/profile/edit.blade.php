@extends('admin.layouts.admin')

@section('content')
<div class="d-flex justify-content-end align-items-center" style="min-height: 80vh;">
    <div class="card shadow-sm border-0" 
         style="width: 300px; margin-right: 40px; transform: translateY(-40px); border-radius: 12px;">
        <div class="card-header card-header-bg text-white text-center py-2"
             style="font-size: 0.9rem; font-weight: 600;">
             {{ __('cms.profile.title') }}
        </div>

        <div class="card-body bg-white p-3">
            <form method="POST" action="{{ route('admin.profile.update') }}" 
                  enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PATCH')

               <div class="text-center mb-2">
                <img id="profilePreview"
                    src="{{ $admin->profile_image
                        ? (\Illuminate\Support\Str::startsWith($admin->profile_image, ['http://', 'https://'])
                            ? $admin->profile_image
                            : asset('storage/' . $admin->profile_image))
                        : 'https://ui-avatars.com/api/?name=' . urlencode($admin->name) . '&background=0d6efd&color=fff&size=64' }}"
                    alt="Profile"
                    class="rounded-circle shadow-sm mb-1"
                    style="width:80px; height:80px; object-fit:cover; transition:0.3s;">
                    
                <div class="d-flex justify-content-center">
                    <label for="profile_image" class="btn btn-secondary btn-sm rounded-pill px-3 mt-1">
                       {{ __('cms.profile.choose_file') }}
                    </label>
                    <input type="file" id="profile_image" name="profile_image" accept="image/*" class="d-none">
                </div>

                @error('profile_image')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
                <div class="mb-1">
                    <input type="text" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="name" name="name" value="{{ old('name', $admin->name) }}" placeholder=" {{ __('cms.profile.name') }}">
                    @error('name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-1">
                    <input type="email" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="email" name="email" value="{{ old('email', $admin->email) }}" placeholder="{{ __('cms.profile.email') }}">
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-1">
                    <input type="text" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="phone" name="phone" value="{{ old('phone', $admin->phone) }}" placeholder="{{ __('cms.profile.phone') }}">
                    @error('phone')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <hr class="my-2">

                <div class="mb-1">
                    <input type="password" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="current_password" name="current_password" placeholder="{{ __('cms.profile.current_password') }}">
                    @error('current_password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-1">
                    <input type="password" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="password" name="password" placeholder="{{ __('cms.profile.new_password') }}">
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <input type="password" class="form-control form-control-sm bg-light border-0 rounded-pill"
                           id="password_confirmation" name="password_confirmation" placeholder="{{ __('cms.profile.confirm_new_password') }}">
                    @error('password_confirmation')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-sm btn-primary rounded-pill px-3 py-1 d-flex align-items-center ms-auto" 
                            id="saveProfileBtn" style="font-size:0.8rem;">
                        <span class="spinner-border spinner-border-sm me-2 d-none" id="profileLoader" role="status"></span>
                        {{ __('cms.profile.save') }}
                    </button>
                </div>
            </form>

           
        </div>
    </div>
</div>
@endsection
@section('js')
@if (session('success'))
<script>
    toastr.success("{{ session('success') }}", "{{ __('cms.profile.success') }}", {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 5000
    });
</script>
@endif
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('profile_image');
    const previewImg = document.getElementById('profilePreview');

    fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
});
</script>
@endsection
