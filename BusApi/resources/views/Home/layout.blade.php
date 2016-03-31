<!DOCTYPE html>
<html>
<head>
    @include('Home.include.header')
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,200' rel='stylesheet' type='text/css'>

    <style>
        body{
            font-family: 'Catamaran', sans-serif;
            background-color: #D2D7D3;
        }

    </style>
</head>
<body>

<div class="wrapper">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span><i class="fa fa-bus"></i></span>&nbsp;Bus API - Documentation</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <a class="link" href="user" role="button" style="color: #2ecc71">LogIn</a>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <section>
        <div class="container">
            @include('Home.include.sidebar')
            <div class="docs-content">
                @yield('content')
            </div>
        </div>
    </section>

    <footer>
        <div class="">
            <p style="color: #2ecc71;"> 2016 &copy; <span><i class="fa fa-bus"></i></span>&nbsp;BUS API Team. All Rights Reserved.</p>
        </div>
    </footer>
</div>

@include('Home.include.script')
</body>

</html>