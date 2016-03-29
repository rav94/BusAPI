@extends('Home.layout')
@section('sidebar')
    @include('Home.include.sidebar')
@endsection
@section('content')
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <style>
        .table tfoot td, table tfoot th, table thead td, table thead th{
            font-weight: 100;
        }
        .code{
            font-family: Menlo,Monaco,Consolas,"Courier New",monospace;
            font-size: 14px;
        }
        td{
            font-size: 14px;
        }
    </style>

    <h3 id="view_type">Buses</h3>

    <p>The API Resource page for the Bus Route Resource. You can easily create, update, delete a bus route resource
        and get the title by the ID in each bus route resource.</p>

    <br>
    <h4 id="view_type">HTTP Methods Allowed</h4>
    <table class="hover">
        <thead>
        <tr>
            <th></th>
            <th>POST (Create)</th>
            <th>GET (Read)</th>
            <th>PUT (Update/Replace)</th>
            <th>PATCH (Update/Modify)</th>
            <th>DELETE (Delete)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Bus Route</td>
            <td>Allowed</td>
            <td>Allowed</td>
            <td>Allowed</td>
            <td>Not Allowed</td>
            <td>Allowed</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Creating a Bus Route Resource (HTTP POST)</h4>
    <div class="callout code"><p>POST: busapi/busroute/create/{apiKey}</p></div>
    <table class="hover">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required</th>
            <th>Secure API Key</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>bus_id</td>
            <td>Id of the Bus</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>route_number</td>
            <td>Route Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>route_name</td>
            <td>Route Name</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>starting_location</td>
            <td>Starting Location</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>finishing_location</td>
            <td>Finishing Location</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>estimated_time</td>
            <td>Estimated Time</td>
            <td>No</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Updating a Bus Route Resource (HTTP PUT)</h4>
    <div class="callout code"><p>PUT: busapi/busroute/update/{id}/{apiKey}</p></div>
    <table class="hover">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required</th>
            <th>Secure API Key</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>route_id</td>
            <td>Id of the Route</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_id</td>
            <td>Id of the Bus</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>route_number</td>
            <td>Route Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>route_name</td>
            <td>Route Name</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>starting_location</td>
            <td>Starting Location</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>finishing_location</td>
            <td>Finishing Location</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>estimated_time</td>
            <td>Estimated Time</td>
            <td>No</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Deleting a Bus Route Resource (HTTP DELETE)</h4>
    <div class="callout code"><p>DELETE: busapi/busroute/delete/{id}/{apiKey}</p></div>
    <table class="hover">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required</th>
            <th>Secure API Key</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>route_id</td>
            <td>Id of the Route</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Get a Bus Route By ID (HTTP GET)</h4>
    <div class="callout code"><p>GET: busapi/busroute/{id}/{apiKey}</p></div>
    <table class="hover">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required</th>
            <th>Secure API Key</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>route_id</td>
            <td>Id of the Route</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>

    <h4>Example</h4>
    <p>Here's a sample call to update /busroute/1. JSON format is shown. Be sure to set "Accept" and
        "Content-Type" headers in your request to "application/json",
        otherwise you'll get back XML.</p>

    Here is a sample Bus Route Resource Search By ID:
    <pre class="prettyprint">&lt;script&gt;
     $(document).ready(function () {
        var url="http://server.com/busapi/";
        var api_key="XXXXXXXXXXXXXXX";
        var ID=1;
          $.ajax({
              url: url+"busroute/"+ID+"/"+api_key,
              type: "GET",
              success: function (e) {
                  $.each(e, function (e, t) {
                      alert('success');
                  })
              },
              error: function (e) {
                   alert('Error!');
              }
          })
      })


    <hr>
@endsection