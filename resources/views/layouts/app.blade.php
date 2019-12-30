<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @include('layouts.head-scripts')

    @stack('preScripts')

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

    @include('layouts.post-scripts')

    @stack('postScripts')
</body>
</html>
