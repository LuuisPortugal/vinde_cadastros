<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Vinde') }}</title>

    <!-- Styles -->
    <link href="/library/bootstrap-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/library/bootstrap-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>--}}

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right"></ul>
                </div>--}}
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/library/jquery-dist/js/jquery-3.2.1.min.js"></script>
    <script src="/library/bootstrap-dist/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
    @yield('script')
</body>
</html>
