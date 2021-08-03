<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Kilalayo Grow</title>
    <!--/tags -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link rel="shortcut icon" href="images/favicon/favicon.ico">

    @include('common.meta-social')
    @include('common.styles')
</head>
<body>

    @include('header.header')

    @include('header.header-social')

    @include('menu.menu')

    @yield('content')

    @include('footer.footer')

    @include('common.scripts')
</body>
</html>
