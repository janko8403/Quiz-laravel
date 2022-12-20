<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pepco</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="error">
    
    <main role="main">

        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <a href="{{ url('/') }}"><img class="logo-cms img-center" src="/images/logo.svg" alt="pepco"></a>
                </div>
            </div>

            <div class="spacer s4"></div>
            <div class="spacer s4"></div>

            @yield('content')
        
        </div>

    </main>

    <script src="{{ asset('frontend/js/app.js') }}"></script>

</body>
</html>
