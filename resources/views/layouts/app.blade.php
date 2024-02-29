<!doctype html>
<html class="no-js"
      lang="{{ LaravelLocalization::getCurrentLocale() }}"
      dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name') }} | @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- All css files are included here. -->
        <!-- Bootstrap framework main css -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery.mb.YTPlayer.min.css') }}">
        <!-- This core.css file contents all plugins css file. -->
        <link rel="stylesheet" href="{{ asset('assets/css/core.css') }}">
        <!-- Theme shortcodes/elements style -->
        <link rel="stylesheet" href="{{ asset('assets/css/shortcode/shortcodes.css') }}">
        <!-- Theme main style -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- Responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <!-- User style -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">


        <!-- Modernizr JS -->
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        @if(LaravelLocalization::getCurrentLocale() == 'ar')
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Droid+Arabic+Kufi:wght@400;700&display=swap');

                h1, h2, h3, h4, h5, h6, p, span, a, li, ul {
                    font-family: 'Droid Arabic Kufi', sans-serif !important;
                    direction: rtl;
                }

            </style>
        @endif

        <style>
            body {
                margin: 0
            }

            canvas {
                display: block;
                margin: auto;
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <!-- Body main wrapper start -->
        <div class="wrapper">
            @include('layouts.section.header')

            @yield('content')

            @include('layouts.section.footer')
        </div>
        <!-- Body main wrapper end -->

        <!-- jquery latest version -->
        <script src="{{ asset('assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
        <!-- Bootstrap framework js -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- All js plugins included in this file. -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <!-- Waypoints.min.js. -->
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <!-- Main js file that contents all jQuery plugins activation. -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        @stack('js')
    </body>
</html>
