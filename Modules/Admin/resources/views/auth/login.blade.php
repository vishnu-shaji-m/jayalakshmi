@extends('admin::auth.layouts.app')
@section('title', 'Login')
@section('content')
    <div class="text-center">
        <h5 class="mb-0">Welcome Back !</h5>
        <p class="text-muted mt-2">Sign in to continue to @settings('website-name').</p>
    </div>
    @if ($errors->has('login'))
        <div class="alert alert-danger text-center my-4" role="alert">
            {{ $errors->first('login') }}
        </div>
    @endif
    <form class="mt-4 pt-2" action="{{ route('admin.login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                placeholder="Enter email" value="{{ old('email', $email) }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="d-flex align-items-start">
                <div class="flex-grow-1">
                    <label class="form-label">Password</label>
                </div>
            </div>
            <div class="input-group auth-pass-inputgroup">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Enter password" aria-label="Password" aria-describedby="password-addon"
                    value="{{ $password }}">
                <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon">
                    <i class="mdi mdi-eye-outline"></i>
                </button>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember-check"
                        @checked($remember)>
                    <label class="form-check-label" for="remember-check">
                        Remember me
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light submitBtn" type="submit">
                Log In
            </button>
        </div>
    </form>
@endsection
@push('js')
    <!-- Initialization script for password addon functionality -->
    <script src="{{ asset('backend/js/pages/pass-addon.init.js') }}"></script>
@endpush
