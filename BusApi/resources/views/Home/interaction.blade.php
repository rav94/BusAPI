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
                <li><a href="../user/apikey">API Key</a></li>
                <li class="active"><a href="../user/busapi">Try it out!</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a class="btn btn-link" href="../user" role="button">Hi {{$usr->name}}!</a>
                <a href="../user/logout" class="btn btn-danger" style="margin-top: 5px" role="button">LogOut</a>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<br><br>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-success" role="alert" style="text-align: center; color: #27ae60">Hi there <b>{{$usr->name}}</b>, your secure API key is : <div style="color: #7f8c8d;"><b>{{$usr->token}}</b></div> </div>
    </div>
</div>
<br><br>

<div class="row">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-1">
                <h2>Create Bus Record</h2>
                <form method="POST" action="../busapi/bus/create/{{$usr->token}}">
                    <div class="form-group">
                        <label >Bus Name <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="bus_name" placeholder="Bus Name" required>
                    </div>
                    <div class="form-group">
                        <label >Bus Register Number <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" name="bus_reg_number" placeholder="Bus Register Number" required>
                    </div>
                    <div class="form-group">
                        <label >Bus Brand <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="bus_brand" placeholder="Bus Brand" required>
                    </div>
                    <div class="form-group">
                        <label >Number of Seats <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" name="bus_seat_no" placeholder="No of seats" required>
                    </div>
                    <div class="form-group">
                        <label>Bus Owner Name</label>
                        <input type="text" class="form-control" name="bus_owner_name" placeholder="Bus owner Name">
                    </div>
                    <div class="form-group">
                        <label >Bus Owner Contact Number</label>
                        <input type="number" class="form-control" name="bus_contact_no" placeholder="Bus owner Contact Number">
                    </div>

                    <button type="submit" class="btn btn-success">Add</button>
                    <button type="reset" class="btn btn-info">Clear</button>
                </form>
            </div>
            <div class="col-md-5">
                <h2>Create Bus Route Record</h2>
                <form id="busRouteForm" method="POST" action="../busapi/busroute/create/{{$usr->token}}">
                    <div class="form-group">
                        <label>Bus ID <span style="color:red;">*</span></label>
                        <select class="form-control" name="b_id" data-no-selected="Nothing Selected">
                            @foreach($busData as $busData)
                            <option value="{{$busData->bus_id}}">{{$busData->bus_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Route No <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" name="route_number" placeholder="Route No" required>
                    </div>
                    <div class="form-group">
                        <label>Route Name <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="route_name" placeholder="Route Name" required>
                    </div>
                    <div class="form-group">
                        <label>Starting Location <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="starting_location" placeholder="Starting Location" required>
                    </div>
                    <div class="form-group">
                        <label>Finishing Location <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="finishing_location" placeholder="Finishing Location" required>
                    </div>
                    <div class="form-group">
                        <label>Estimated Time</label>
                        <input type="text" class="form-control" name="estimated_time" placeholder="Estimated Time">
                    </div>

                    <button type="submit" class="btn btn-success">Add</button>
                    <button type="reset" class="btn btn-info">Clear</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-1">
                <h2>Create Driver Record</h2>
                <form method="POST" action="../busapi/driver/create/{{$usr->token}}">
                    <div class="form-group">
                        <label>Bus ID <span style="color:red;">*</span></label>
                        {{--<select id="b_id" class="form-control" name="b_id" data-no-selected="Nothing Selected">--}}
                            {{--@foreach($busData as $busDatas)--}}
                                {{--<option value="{{$busDatas->bus_id}}">{{$busDatas->bus_name}}</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                    </div>
                    <div class="form-group">
                        <label>Driver Name <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="driver_name" placeholder="Driver Name" required>
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="number" class="form-control" name="contact_number" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <label>NIC No <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" name="nic_number" placeholder="NIC No" required>
                    </div>
                    <div class="form-group">
                        <label>Registration No <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" name="driver_reg_number" placeholder="Registration No" required>
                    </div>

                    <button type="submit" class="btn btn-success">Add</button>
                    <button type="reset" class="btn btn-info">Clear</button>
                </form>
            </div>
            <div class="col-md-5">
                <h2>Create Conductor Record</h2>
                <form method="POST" action="../busapi/conductor/create/{{$usr->token}}">
                    <div class="form-group">
                        <label>Bus ID <span style="color:red;">*</span></label>
                        {{--<select class="form-control" name="b_id" data-no-selected="Nothing Selected">--}}
                            {{--@foreach($busData as $busData)--}}
                                {{--<option value="{{$busData->bus_id}}">{{$busData->bus_name}}</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                    </div>
                    <div class="form-group">
                        <label>Conductor Name <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="conductor_name" placeholder="Conductor Name" required>
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="number" class="form-control" name="contact_number" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <label>NIC No <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" name="nic_number" placeholder="NIC No" required>
                    </div>
                    <div class="form-group">
                        <label>Registration No <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" name="conductor_reg_number" placeholder="Registration No" required>
                    </div>

                    <button type="submit" class="btn btn-success">Add</button>
                    <button type="reset" class="btn btn-info">Clear</button>
                </form>
            </div>
        </div>
    </div>
</div>


{!! HTML::script('js/vendor/jquery.min.js')!!}
{!! HTML::script('js/bootstrap.min.js')!!}
{{--<script>--}}
    {{--form=document.getElementById("busRouteForm");--}}
    {{--function toCreateRoute() {--}}
        {{--form.action="../busapi/busroute/create/{{$usr->token}}";--}}
        {{--form.submit();--}}
    {{--}--}}
    {{--function toUpdateRoute() {--}}
        {{--$.ajax--}}
        {{--({--}}
            {{--url: '../busapi/busroute/update/{{$busRoute->route_id}}/{{$usr->token}}',--}}
            {{--type: 'PUT',--}}
            {{--success: function (data)--}}
            {{--{--}}
                {{----}}
            {{--}--}}
        {{--});--}}

    {{--}--}}
{{--</script>--}}

</body>
</html>