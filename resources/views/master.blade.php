<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Kilalayo Grow</title>
    <!--/tags -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    @include('common.meta-social')
    @include('common.styles')

    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

    @include('header.header')

    @include('header.header-social')

    @include('banner.banner')

    @yield('content')


    @include('footer.footer')

    @include('common.scripts')
</body>
</html>
