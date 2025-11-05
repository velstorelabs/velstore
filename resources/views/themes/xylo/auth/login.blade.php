@extends('themes.xylo.layouts.auth')

@section('content')
<div class="login-page min-vh-100 d-flex align-items-center justify-content-center mt-4">
    <div class="row w-100 g-0">

        {{-- Left Section: Dark Area --}}
        <div class="col-lg-6 d-flex flex-column justify-content-center text-white px-5 py-5"
             style="background-color: #0e0e0e;">
            
            {{-- Accent Symbol --}}
            <div class="mb-5 fs-1 fw-bold text-warning">*</div>

            {{-- Main Greeting --}}
            <div class="fw-bold display-4 mb-3 lh-sm">
                {{ __('store.login.hello') }} <br> {{ __('store.login.theme_name') }}
            </div>

            {{-- Subheading --}}
            <div class="fs-2 fw-semibold mb-4 text-light">
                {{ __('store.login.login_now') }}
            </div>

            {{-- Supporting Text --}}
            <p class="text-light mb-5 opacity-75 fs-6">
                {{ __('store.login.login_description') }}
            </p>

            {{-- Footer --}}
            <div class="mt-auto text-center w-100 text-secondary small opacity-75 pt-4 border-top border-secondary">
                 {{ __('store.login.copyright') }}
            </div>
        </div>

        {{-- Right Section: Login Form --}}
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white p-5">
            
            {{-- Logo --}}
            <div class="text-center mb-4">
                <img src="{{ asset('storage/brands/logo-ready.png') }}" width="160" alt="Main Logo">
            </div>

            {{-- Heading --}}
            <h2 class="fw-semibold mb-2 text-dark">{{ __('store.login.welcome_back') }}</h2>
            <p class="text-muted mb-4 text-center px-3">
                {{ __('store.login.form_subtitle') }}
            </p>

            {{-- Login Form --}}
            <form class="w-100" method="POST" action="{{ route('customer.login') }}">
                @csrf

                <div class="mb-3">
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="{{ __('store.login.email') }}" class="form-control rounded-3 p-2">
                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <input type="password" name="password" placeholder="{{ __('store.login.password') }}" class="form-control rounded-3 p-2">
                    @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <button type="submit" 
                        class="btn w-100 py-2 rounded-3 fw-semibold text-uppercase text-white border-0"
                        style="background-color: #0e0e0e; transition: all 0.3s ease;">
                    {{ __('store.login.login_btn') }}
                </button>
            </form>

            <p class="mt-4 mb-0 text-muted text-center">
                {{ __('store.login.dont_have_account') }}
                <a href="{{ route('customer.register') }}" class="text-decoration-none fw-semibold">{{ __('store.login.signup') }}</a>
                <br>
                <a href="{{ route('customer.password.request') }}" class="text-decoration-none">{{ __('store.login.forgot_password') }}</a>
            </p>
        </div>
    </div>
</div>
@endsection
