<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Manage</title>
    {!! HTML::style('css/bootstrap.min.css')!!}
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Bus API</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../user">Current Data<span class="sr-only">(current)</span></a></li>
                <li><a href="../user/busapi">Add More Buses</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a href="../user/logout" class="btn btn-danger" role="button">LogOut</a>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<br><br>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-success" role="alert" style="text-align: center;">Api Key : <div style="color: black;">{{$usr->token}}</div> </div>
    </div>
</div>
<br><br>

<div class="row">
    <div class="panel panel-info">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-1">
                <h3>Bus Data</h3>
                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Registered No</th>
                        <th>Brand</th>
                        <th>No of Seats</th>
                        <th>Owner Name</th>
                        <th>Owner Contact No</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0;$i<count($bus);$i++)
                        <tr>
                            <td>{{$bus[$i]->bus_id}}</td>
                            <td>{{$bus[$i]->bus_name}}</td>
                            <td>{{$bus[$i]->bus_reg_number}}</td>
                            <td>{{$bus[$i]->bus_brand}}</td>
                            <td>{{$bus[$i]->bus_seat_no}}</td>
                            <td>{{$bus[$i]->bus_owner_name}}</td>
                            <td>{{$bus[$i]->bus_contact_no}}</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
            <div class="col-md-5">
                <h3>Bus Routes Data</h3>
                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Bus Id</th>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Starting Location</th>
                        <th>Finishing Location</th>
                        <th>Estimated Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0;$i<count($broute);$i++)
                        <tr>
                            <td>{{$broute[$i]->b_id}}</td>
                            <td>{{$broute[$i]->route_number}}</td>
                            <td>{{$broute[$i]->route_name}}</td>
                            <td>{{$broute[$i]->starting_location}}</td>
                            <td>{{$broute[$i]->finishing_location}}</td>
                            <td>{{$broute[$i]->estimated_time}}</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="panel panel-info">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-1">
                <h3>Driver Data</h3>
                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Bus Id</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>NIC Number</th>
                        <th>Registration No</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0;$i<count($dri);$i++)
                        <tr>
                            <td>{{$dri[$i]->b_id}}</td>
                            <td>{{$dri[$i]->driver_name}}</td>
                            <td>{{$dri[$i]->contact_number}}</td>
                            <td>{{$dri[$i]->nic_number}}</td>
                            <td>{{$dri[$i]->driver_reg_number}}</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
            <div class="col-md-5">
                <h3>Conductor Data</h3>
                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Bus Id</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>NIC Number</th>
                        <th>Registration No</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0;$i<count($con);$i++)
                        <tr>
                            <td>{{$con[$i]->b_id}}</td>
                            <td>{{$con[$i]->conductor_name}}</td>
                            <td>{{$con[$i]->contact_number}}</td>
                            <td>{{$con[$i]->nic_number}}</td>
                            <td>{{$con[$i]->conductor_reg_number}}</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{!! HTML::script('js/vendor/jquery.min.js')!!}
{!! HTML::script('js/bootstrap.min.js')!!}

</body>
</html>