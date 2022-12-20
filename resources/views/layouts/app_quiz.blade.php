<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-touch-fullscreen" content="yes">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--favicon start-->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/favicon32x32.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
    <!--favicon end-->

    <title>Pepco</title>
    <meta name="description" content="PEPCO GROWING OUR BUSINESS GROWING OUR PEOPLE">

    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Pepco" />
    <meta property="og:description" content="PEPCO GROWING OUR BUSINESS GROWING OUR PEOPLE" />
    <meta property="og:url" content="https://conference2021pepco.eu/" />
    <meta property="og:site_name" content="conference 2021 pepco" />
    <meta property="og:image" content="https://conference2021pepco.eu/images/favicon/pepco.png" />
    <meta property="og:image:secure_url" content="https://conference2021pepco.eu/images/favicon/pepco.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FB32RLMYV8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-FB32RLMYV8');
    </script>


</head>
<body class="start">

    <header>
        @include('partials.header.desktop-nav')
        @include('partials.header.mobile-nav')
    </header>

    <main role="main" class="mt-3">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="{{ asset('frontend/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>

</body>
</html>
