@extends('themes.xylo.layouts.auth')

@section('content')
<div class="login-page min-vh-100 d-flex align-items-center justify-content-center mt-4">
    <div class="row w-100 g-0">

        {{-- Left Section: Dark Area --}}
        <div class="col-lg-6 d-flex flex-column justify-content-center text-white px-5 py-5"
             style="background-color: #0e0e0e;">
            
            {{-- Small Accent Symbol --}}
            <div class="mb-5 fs-1 fw-bold text-warning">*</div>

            {{-- Main Greeting --}}
            <div class="fw-bold display-4 mb-3 lh-sm">
                Hello <br> Xylo-Theme! 👋
            </div>

            {{-- Sub Heading --}}
            <div class="fs-2 fw-semibold mb-4 text-light">
                Signup Now
            </div>

            {{-- Description Text --}}
            <p class="text-light mb-5 opacity-75 fs-6">
                To craft an effective marketing message, keep it concise and relevant to your target audience,
                include a clear call to action, and ensure it aligns with your brand’s voice and values.
            </p>

            {{-- Footer --}}
            <div class="mt-auto text-center w-100 text-secondary small opacity-75 pt-4 border-top border-secondary">
                © 2025 Xylo-Theme. All rights reserved.
            </div>
        </div>

        {{-- Right Section: Signup Form --}}
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white p-5">
            
            {{-- Logo --}}
            <div class="text-center mb-4">
                <img src="{{ asset('storage/brands/logo-ready.png') }}" width="160" alt="Main Logo">
            </div>

            <h2 class="fw-semibold mb-2 text-dark">Welcome Back</h2>
            <p class="text-muted mb-4 text-center px-3">
                To craft an effective marketing message, keep it concise and relevant to your target audience.
            </p>

            <form class="w-100" method="POST" action="{{ route('customer.register') }}">
                @csrf

                <div class="mb-3">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" class="form-control rounded-3 p-2">
                    @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required class="form-control rounded-3 p-2">
                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <input type="password" name="password" placeholder="Password" required class="form-control rounded-3 p-2">
                    @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="form-control rounded-3 p-2">
                </div>

                 <button type="submit" 
                        class="btn w-100 py-2 rounded-3 fw-semibold text-white border-0"
                        style="background-color: #0e0e0e; transition: all 0.3s ease;">
                    Sign up
                </button>
            </form>

            <p class="mt-4 mb-0 text-muted">
                Already have an account?
                <a href="{{ route('customer.login') }}" class="text-decoration-none fw-semibold">Login here</a>
            </p>
        </div>
    </div>
</div>
@endsection
