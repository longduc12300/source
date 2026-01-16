@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label" for="remember">
                Remember me
            </label>
        </div>

        <button class="btn btn-light w-100">Login</button>

        <div class="text-center mt-3">
            <a href="{{ route('password.request') }}">Forgot password?</a>
        </div>

        <div class="text-center mt-3">
            <a href="{{ route('register') }}">Create an account</a>
        </div>
    </form>
@endsection
