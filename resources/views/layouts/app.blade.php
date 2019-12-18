<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/dt.js') }}"></script>
    <script src="{{ asset('js/pdfmake.js') }}"></script>
    <script src="{{ asset('js/vf_fonts.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bs.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/dt.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('components.topnav')

        <div class="container-fluid content">
            <div class="row justify-content-between align-content-center mt-4 px-3">
                @include('components.sidebar')

                @include('components.logo')

                @include('components.alerts')
            </div>

            <div class="row justify-content-center">
                <main class="py-2 w-100">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/base.js') }}"></script>
    @yield('scripts')
</body>
</html>
