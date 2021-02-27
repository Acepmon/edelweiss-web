<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="logo/logo.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    {!! SEO::generate() !!}
    <!-- Stylesheets & Fonts -->
    <link href="/css/plugins.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/edelweiss.css" rel="stylesheet">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">

        @include('layouts.default-header')

        @yield('content')

        @include('layouts.default-footer')

    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="/js/jquery.js"></script>
    <script src="/js/plugins.js"></script>
    <!--Template functions-->
    <script src="/js/functions.js"></script>

    @stack('scripts')
</body>

</html>