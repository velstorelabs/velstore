@extends('admin.layouts.login')

@section('css')
<style>
html, body {
    height: 100%;
    margin: 0;
    background-color: #f4f7f6;
    color: #333333;
    justify-content: center;
    align-items: center;
}

.container-wrapper {
    width: 100%;
    max-width: 450px; /* Balanced width */
    padding: 20px;
}

.login-container {
    width: 100%;
    background-color: #ffffff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

</style>
@endsection

@section('content')
<div class="container-wrapper">
    <div class="login-container">
        <div class="text-center mb-3">
            <h1 class="fw-bold">Velstore</h1>
        </div>
        <h2 class="text-center mb-4">{{ cms_translate('auth.login') }}</h2>

        @error('password')
            <div id="errorBar" class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror
        @error('email')
            <div id="errorBar" class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror

        <form method="POST" action="{{ route('vendor.login.submit') }}" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">{{ cms_translate('auth.email') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" placeholder="{{ cms_translate('auth.email') }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">{{ cms_translate('auth.password') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="{{ cms_translate('auth.password') }}" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">{{ cms_translate('auth.remember_me') }}</label>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">{{ cms_translate('auth.login') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection

