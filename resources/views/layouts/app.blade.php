<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Web and App Deveopment | Akshiptika Infotech</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/remixicon/fonts/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body class="" id="body">


    <div class="Loader">
        <div class="spinnerPairHolder">
            <div class="spinnerPair">
                <div class="spinnerPairCercle"></div>
            </div>
            <div class="spinnerPair">
                <div class="spinnerPairCercle"></div>
            </div>
            <div class="spinnerPair">
                <div class="spinnerPairCercle"></div>
            </div>
        </div>
    </div>

    <div id="app">

        <router-view />

    </div>


    <!-- Scripts -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery.countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
