<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a style="float:left; margin-left:-30px;" href="#menu-toggle" id="menu-toggle">=</a>
                <a href="{{ route('welcome') }}">
                    Coders Trust
                </a>
            </li>
            <li>
                <a href="{{route('countries.index')}}">Countries</a>
            </li>
            <li>
                <a href="#">Locations</a>
            </li>
            <li>
                <a href="#">Categories</a>
            </li>
            <li>
                <a href="#">Specialisms</a>
            </li>
            <li>
                <a href="#">Job Types</a>
            </li>
            <li>
                <a href="#">Companies</a>
            </li>
            <li>
                <a href="#">Candidates</a>
            </li>
            <li>
                <a href="#">Packages</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
