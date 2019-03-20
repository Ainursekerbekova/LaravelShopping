<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        .form-check-label{
            padding-left: 15px !important;
        }
        body{
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('css/images/ffff.jpg') }}');
            background-size: 100%;
            background-attachment: fixed;
        }
        ul{
            display: inline-block;
        }

        #basket_icon {
            width: 20px;
            height: 20px;
        }
        .navbar{
            border: none !important;
            padding: 5px 0;
            margin-bottom: 0 !important;
            border-radius: 0 !important;
        }
        .navbar .navbar-brand{
            color: white !important;
            font-size: 30px;
        }
        #basket_icon {
            width: 20px;
            height: 20px;
        }
        .dropdown-toggle {
            color: white !important;
        }
    </style>
</head>
<body>

@include('layouts.nav')

<main class="py-4">
    @yield('content')
</main>
</body>
</html>
