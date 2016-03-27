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
                <li><a href="../user/busapi">Add More Recipes</a></li>
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
                <h2>Add Buses</h2>
                <form method="POST" action="../busapi/bus/create/{{$usr->token}}">
                    <div class="form-group">
                        <label >Bus Name</label>
                        <input type="text" class="form-control" name="bus_name" placeholder="Bus Name">
                    </div>
                    <div class="form-group">
                        <label >Bus Register Number</label>
                        <input type="text" class="form-control" name="bus_reg_number" placeholder="Bus Register Number">
                    </div>
                    <div class="form-group">
                        <label >Bus Brand</label>
                        <input type="text" class="form-control" name="bus_brand" placeholder="Bus Brand">
                    </div>
                    <div class="form-group">
                        <label >Number of Seats</label>
                        <input type="text" class="form-control" name="bus_seat_no" placeholder="No of seats">
                    </div>
                    <div class="form-group">
                        <label >Bus Owner Name</label>
                        <input type="text" class="form-control" name="bus_owner_name" placeholder="Bus owner Name">
                    </div>
                    <div class="form-group">
                        <label >Bus Owner Contact Number</label>
                        <input type="text" class="form-control" name="bus_contact_no" placeholder="Bus owner contact number">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                </form>
            </div>
            <div class="col-md-5">
                <h2>Add Bus Routes</h2>
                <form method="POST" action="../busapi/busroute/create/{{$usr->token}}">
                    <div class="form-group">
                        <label>Bus ID</label>
                        <input type="text" class="form-control" name="b_id" placeholder="Bus ID">
                    </div>
                    <div class="form-group">
                        <label>Route No</label>
                        <input type="text" class="form-control" name="route_number" placeholder="Route No">
                    </div>
                    <div class="form-group">
                        <label>Route Name</label>
                        <input type="text" class="form-control" name="route_name" placeholder="Route Name">
                    </div>
                    <div class="form-group">
                        <label>Starting Location</label>
                        <input type="text" class="form-control" name="starting_location" placeholder="Starting Location">
                    </div>
                    <div class="form-group">
                        <label>Finishing Location</label>
                        <input type="text" class="form-control" name="finishing_location" placeholder="Finishing Location">
                    </div>
                    <div class="form-group">
                        <label>Estimated Time</label>
                        <input type="text" class="form-control" name="estimated_time" placeholder="Estimated Time">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="panel panel-info">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-1">
                <h2>Add Drivers</h2>
                <form method="POST" action="../busapi/driver/create/{{$usr->token}}">
                    <div class="form-group">
                        <label>Bus ID</label>
                        <input type="text" class="form-control" name="b_id" placeholder="Bus ID">
                    </div>
                    <div class="form-group">
                        <label>Driver Name</label>
                        <input type="text" class="form-control" name="driver_name" placeholder="Driver Name">
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" name="contact_number" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <label>NIC No</label>
                        <input type="text" class="form-control" name="nic_number" placeholder="NIC No">
                    </div>
                    <div class="form-group">
                        <label>Registration No</label>
                        <input type="text" class="form-control" name="driver_reg_number" placeholder="Registration No">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                </form>
            </div>
            <div class="col-md-5">
                <h2>Add Conductors</h2>
                <form method="POST" action="../busapi/conductor/create/{{$usr->token}}">
                    <div class="form-group">
                        <label>Bus ID</label>
                        <input type="text" class="form-control" name="b_id" placeholder="Bus ID">
                    </div>
                    <div class="form-group">
                        <label>Conductor Name</label>
                        <input type="text" class="form-control" name="conductor_name" placeholder="Conductor Name">
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" name="contact_number" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <label>NIC No</label>
                        <input type="text" class="form-control" name="nic_number" placeholder="NIC No">
                    </div>
                    <div class="form-group">
                        <label>Registration No</label>
                        <input type="text" class="form-control" name="conductor_reg_number" placeholder="Registration No">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                </form>
            </div>
        </div>
    </div>
</div>


{!! HTML::script('js/vendor/jquery.min.js')!!}
{!! HTML::script('js/bootstrap.min.js')!!}

</body>
</html>