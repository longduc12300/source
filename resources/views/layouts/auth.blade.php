<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Auth')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="login-page">

<video class="bg-video" autoplay muted loop playsinline>
    <source src="{{ asset('videos/columbina-live-bg.mp4') }}" type="video/mp4">
</video>

<div class="moon-logo">
    <img src="{{ asset('images/columbina-logo.svg') }}" alt="Moon Logo">
</div>

<audio id="bgm" loop>
    <source src="{{ asset('audio/columbina-theme.mp3') }}" type="audio/mpeg">
</audio>

<button id="musicToggle" class="music-btn">
    <i class="fa-solid fa-volume-xmark"></i>
</button>

<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card glass-card" style="width: 420px;">
        <div class="card-body p-4">

            <div class="text-center mb-3">
                <img src="{{ asset('images/columbina-genshin.gif') }}" class="login-logo" height="80">
            </div>

            @yield('content')

        </div>
    </div>
</div>

</body>
</html>
