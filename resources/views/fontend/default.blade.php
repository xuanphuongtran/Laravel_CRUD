<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>All Laravel - @yield('title')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">

</head>
<body>
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">All Laravel TEnv</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Trang chủ</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ví dụ <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/first-blade-example">Ví dụ Blade 1</a></li>
                            <li><a href="/second-blade-example">Ví dụ Blade 2</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact">Liên hệ</a></li>
                    @if(Session::has('login') && Session::get('login') == true)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xin chào {{ Session::get('name') }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout">Đăng xuất</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <br>
            <h1>Môi trường test Laravel cho website allaravel.com</h1>
        </div>
        <p class="lead">
            @yield('content')
        </p>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">Copyright © 2017, <a href="https://allaravel.com">All Laravel</a></p>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>