<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="text-center">
            <h1 class="display-4 mb-4 font-weight-bold">{{ config('app.name', 'Laravel') }}</h1>
            
            <div class="mb-4">
                @if (Route::has('login'))
                    <div class="d-flex justify-content-center gap-3">
                        @auth
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-lg px-5 shadow-sm">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg px-4 mx-2">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 mx-2">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

            <p class="text-muted mt-5">
                Laravel v{{ app()->version() }} (PHP v{{ PHP_VERSION }})
            </p>
        </div>
    </div>
</body>
</html>
