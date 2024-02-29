<!doctype html>
<html class="no-js"
      lang="{{ LaravelLocalization::getCurrentLocale() }}"
      dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name') }} | Demo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <style>
            *
            {
                margin: 0;
                padding: 0;
            }

            html,
            body {
                overflow: hidden;
            }

            .canvas {
                position: fixed;
                top: 0;
                left: 0;
                outline: none;
            }
        </style>

        @vite(['resources/js/demo.js'])
    </head>

    <body>
        <canvas></canvas>
    </body>
</html>
