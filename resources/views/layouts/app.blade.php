<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/0ab9d5e301.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container">
        <section class="px-4">
            <header>
                <h1>Tweety</h1>
            </header>
        </section>
    </div>
    <main class="py-4">
        <div class="container">
            <div class="grid">
                {{-------------------sidebox------------------}}
                <div class="box-1">
                    @include('_sidebar-link')
                </div>
                {{-------------------tweets------------------}}
                <div class="box-2">
                    @yield('content')
                </div>
                {{-------------------followers------------------}}
                <div class="box-3">
                    @include('_friends-list')
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
