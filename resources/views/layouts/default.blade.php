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

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet"> 
    <link href="/css/edelweiss.css" rel="stylesheet">

    @stack('styles')
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

    <script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.com/b16867043/crm/site_button/loader_1_0op401.js');
    </script>

    @stack('scripts')
</body>

</html>