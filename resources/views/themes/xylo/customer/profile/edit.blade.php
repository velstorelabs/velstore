@extends('themes.xylo.layouts.master')

@section('content')
<div class="container py-2">
    <div class="row">
        <div class="col-lg-4 col-md-5 ms-auto">
            <div class="card shadow-sm rounded-3" style="border: 0.1px solid #e9f8ee;">

                <div class="card-header bg-white border-0 text-center py-2">
                    <h6 class="fw-semibold text-uppercase mb-1" style="font-size: 14px;">{{ __('store.profile.title') }}</h6>
                </div>
                
                <div class="card-body px-2 py-1" style="font-size: 13px;">

                    {{-- Edit Form --}}
                    <form action="{{ route('customer.profile.update') }}" method="POST" enctype="multipart/form-data" class="small">
                        @csrf
                        @method('PUT')

                        {{-- Profile Image --}}
                        <div class="text-center mb-2">
                            <img id="profilePreview"
                                src="{{ $customer->profile_image 
                                    ? asset('storage/' . $customer->profile_image) 
                                    : 'https://ui-avatars.com/api/?name=' . urlencode($customer->name) . '&background=0D8ABC&color=fff&size=70' }}"
                                alt="Profile"
                                class="rounded-circle shadow-sm mb-1"
                                style="width:65px; height:65px; object-fit:cover; transition:0.3s;">

                            <div class="d-flex justify-content-center">
                                <label for="profile_image" class="btn btn-light btn-sm rounded-pill px-2 py-0 mt-0" style="font-size: 13px;">
                                    {{ __('store.profile.choose_file') }}
                                </label>
                                <input type="file" id="profile_image" name="profile_image" accept="image/*" class="d-none">
                            </div>

                            @error('profile_image')
                                <div class="text-danger small mt-1" style="font-size: 12px;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label mb-0 small" style="font-size: 13px;">{{ __('store.profile.name') }}</label>
                            <input type="text" name="name" value="{{ old('name', $customer->name) }}" class="form-control form-control-sm p-1" style="font-size:13px;">
                            @error('name')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label mb-0 small" style="font-size: 13px;">{{ __('store.profile.email') }}</label>
                            <input type="email" name="email" value="{{ old('email', $customer->email) }}" class="form-control form-control-sm p-1" style="font-size:13px;">
                            @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label mb-0 small" style="font-size: 13px;">{{ __('store.profile.phone') }}</label>
                            <input type="text" name="phone" value="{{ old('phone', $customer->phone) }}" class="form-control form-control-sm p-1" style="font-size:13px;">
                            @error('Phone')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label mb-0 small" style="font-size: 13px;">{{ __('store.profile.address') }}</label>
                            <textarea name="address" rows="2" class="form-control form-control-sm p-1" style="font-size:13px;">{{ old('address', $customer->address) }}</textarea>
                            @error('address')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label mb-0 small" style="font-size: 13px;">{{ __('store.profile.current_password') }}</label>
                            <input type="password" name="current_password" class="form-control form-control-sm p-1" style="font-size:13px;">
                            @error('current_password')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label mb-0 small" style="font-size: 13px;">{{ __('store.profile.new_password') }}</label>
                            <input type="password" name="password" class="form-control form-control-sm p-1" style="font-size:13px;">
                            @error('password')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label class="form-label mb-0 small" style="font-size: 13px;">{{ __('store.profile.confirm_new_password') }}</label>
                            <input type="password" name="password_confirmation" class="form-control form-control-sm p-1" style="font-size:13px;">
                            @error('password_confirmation')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-start">
                            <button type="submit" class="btn btn-dark btn-sm px-3 py-1" style="font-size:13px;">
                                <i class="bi bi-save me-1"></i>{{ __('store.profile.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@if (session('success'))
    <script>
        toastr.success("{{ session('success') }}", "{{ __('store.profile.success') }}", {
            closeButton: true,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: 5000
        });
    </script>
@endif

{{-- Live Preview Script --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('profile_image');
    const previewImg = document.getElementById('profilePreview');
    fileInput.addEventListener('change', e => {
        const file = e.target.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = e => previewImg.src = e.target.result;
            reader.readAsDataURL(file);
        }
    });
});
</script>
@endsection
