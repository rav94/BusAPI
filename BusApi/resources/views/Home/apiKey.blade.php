<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bus API - User Management</title>
    {!! HTML::style('css/bootstrap.min.css')!!}
    {!! HTML::style('css/login-page.css')!!}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
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
            <a class="navbar-brand" href="/"><span><i class="fa fa-bus"></i></span>&nbsp;Bus API</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="../user">Available Data<span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="../user/apikey">API Key</a></li>
                <li><a href="../user/busapi">Try it out!</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a class="btn btn-link" href="../user" role="button">Hi {{$usr->name}}!</a>
                <a href="../user/logout" class="btn btn-danger" role="button" style="margin-top: 5px">LogOut</a>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<br><br>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-success" role="alert" style="text-align: center; color: #27ae60">
            Hi there <b>{{$usr->name}}</b>, your secure API key is : <div style="color: #7f8c8d;"><b>{{$usr->token}}</b>
            </div>
            <br>
            Your Email is: <b>{{$usr->email}}</b>
        </div>
    </div>
</div>