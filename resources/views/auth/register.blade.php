<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="login-page">

<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card glass-card" style="width: 420px;">
        <div class="card-body p-4">

            {{-- Logo --}}
            <div class="text-center mb-3">
                <img src="{{ asset('images/fuxuan.png') }}" alt="logo" style="height: 80px">
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Name --}}
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"
                        required
                        autofocus
                    >
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

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

                {{-- Confirm Password --}}
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        class="form-control"
                        required
                    >
                </div>

                {{-- Button --}}
                <button class="btn btn-light w-100">
                    Register
                </button>

                {{-- Login link --}}
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="text-decoration-none">
                        Already have an account?
                    </a>
                </div>
            </form>

        </div>
    </div>
</div>

</body>
</html>
