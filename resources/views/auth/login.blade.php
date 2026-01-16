<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="login-page">

<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card glass-card" style="width: 420px;">
        <div class="card-body p-4">

            <div class="text-center mb-3">
                <img src="{{ asset('images/fuxuan.png') }}" alt="logo" style="height: 80px">
            </div>

            {{-- Session status --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
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

                {{-- Password --}}
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        required
                    >
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Remember --}}
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>

                {{-- Button --}}
                <button class="btn btn-light w-100">
                    Login
                </button>

                {{-- Forgot --}}
                <div class="text-center mt-3">
                    <a href="{{ route('password.request') }}" class="text-decoration-none">
                        Forgot your password?
                    </a>
                </div>

                {{-- Sign up --}}
                <div class="text-center mt-3">
                    <a href="{{ route('register') }}" class="text-decoration-none">
                        Create an account
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
