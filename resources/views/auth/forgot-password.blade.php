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
        </div>
    </div>
</div>

</body>
</html>