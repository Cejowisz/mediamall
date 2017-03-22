<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Mediamall') }} @yield('title')</title>


    {{-- owl --}}
            <!-- Owl-Carousel -->
    <link href="{{ url('css/general.css') }}" rel="stylesheet">
    <link href="{{ url('css/custom.css') }}" rel="stylesheet">
    <link href="{{ url('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ url('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/animate.css') }}" rel="stylesheet">

    {{--<link rel="stylesheet" href="{{ url('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/mediamall.css') }}">

    @yield('stylesheets')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">



    <!--[if IE 9]>
    <script src="js/PIE_IE9.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/PIE_IE678.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>