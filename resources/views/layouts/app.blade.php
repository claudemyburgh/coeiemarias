<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-71929706-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-71929706-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ config('app.url') }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Scripts -->
    @yield('list')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfdVdpbrc7kbs7QpgahIWGhk2xqsk3gds"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="{{ set_body(['blocks','has-image']) }}">
    <div id="app">
        {{-- @include('components._loader') --}}

        @include('partials._nav')
        @include('partials._status')

        <main class="main">
            @yield('content')
        </main>
        @include('partials._last-image')
        <google-map></google-map>
        @include('partials._footer')
    </div><!-- #app -->
</body>
</html>

