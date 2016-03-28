<!DOCTYPE html>
<html>
<head>
    @include('Home.include.header')
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Catamaran:400,200' rel='stylesheet' type='text/css'>
<style>
    body{
        font-family: 'Catamaran', sans-serif;
    }
    .button{
        font-size: 15px;;
    }
</style>
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
                <a class="navbar-brand" href="/">Bus API - Documentation</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <a class="btn btn-success" href="user" role="button">LogIn</a>
                    <a href="user/logout" class="btn btn-danger" role="button">LogOut</a>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    {{--<header style="background-color:#ea6153";>--}}
        {{--<div class="container">--}}
            {{--<h2 class="lone-header">Bus API</h2>--}}
        {{--</div>--}}
    {{--</header>--}}

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
            <p> 2016 &copy; BUS API Team. All Rights Reserved.</p>
        </div>
    </footer>
</div>

@include('Home.include.script')
</body>

</html>