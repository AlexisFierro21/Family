<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('recursos.head')
</head>
<body class="body">    
    @yield('nav')
    <div id="app">

        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
/*function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
/*function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}*/
</script>
</body>
</html>
