<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Bootstrap CSS local -->
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>

    <body class="bg-light text-dark d-flex p-4 p-lg-5 align-items-center justify-content-lg-center min-vh-100 flex-column">

        <header class="w-100 col-lg-8 col-12 text-sm mb-4">

            @if (Route::has('login'))
                <nav class="d-flex align-items-center justify-content-end gap-3">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="btn btn-outline-dark btn-sm">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="btn btn-outline-dark btn-sm">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="btn btn-dark btn-sm">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif

        </header>

        <main class="container text-center">
            <h1 class="fw-semibold mb-3">Welcome</h1>
            <p class="text-muted">
                Your application is ready.
            </p>
        </main>

        <!-- Bootstrap JS -->
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    </body>
</html>
