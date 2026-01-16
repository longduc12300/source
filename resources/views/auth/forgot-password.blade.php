@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
    <form method="POST" action="{{ route('password.request') }}">
        @csrf

        {{-- Email --}}
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror"
                required
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Button --}}
        <button class="btn btn-light w-100">
            Request Reset Link
        </button>

        <div class="text-center mt-3">
            <a href="{{ route('login') }}" class="text-decoration-none">
                Back to login
            </a>
        </div>
    </form>
@endsection
