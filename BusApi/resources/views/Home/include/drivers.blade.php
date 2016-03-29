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

    <p>The API Resource page for the Driver Resource. You can easily create, update, delete a driver resource
        and get the title by the ID in each driver resource.</p>

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
            <td>Driver</td>
            <td>Allowed</td>
            <td>Allowed</td>
            <td>Allowed</td>
            <td>Not Allowed</td>
            <td>Allowed</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Creating a Driver Resource (HTTP POST)</h4>
    <div class="callout code"><p>POST: busapi/driver/create/{apiKey}</p></div>
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
            <td>dirver_name</td>
            <td>Driver Name</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>contact_number</td>
            <td>Contact Number</td>
            <td>No</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>nic_number</td>
            <td>Driver NIC Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>dirver_reg_no</td>
            <td>Driver Registration Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Updating a Driver Resource (HTTP PUT)</h4>
    <div class="callout code"><p>PUT: busapi/driver/update/{id}/{apiKey}</p></div>
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
            <td>driver_id</td>
            <td>Id of the Driver</td>
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
            <td>driver_name</td>
            <td>Driver Name</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>contact_number</td>
            <td>Contact Number</td>
            <td>No</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>nic_number</td>
            <td>Driver NIC Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>driver_reg_no</td>
            <td>Driver Registration Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Deleting a Driver Resource (HTTP DELETE)</h4>
    <div class="callout code"><p>DELETE: busapi/driver/delete/{id}/{apiKey}</p></div>
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
            <td>driver_id</td>
            <td>Id of the Route</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Get a Driver By ID (HTTP GET)</h4>
    <div class="callout code"><p>GET: busapi/driver/{id}/{apiKey}</p></div>
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
            <td>driver_id</td>
            <td>Id of the Route</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>

    <h4>Example</h4>
    <p>Here's a sample call to update /driver/1. JSON format is shown. Be sure to set "Accept" and
        "Content-Type" headers in your request to "application/json",
        otherwise you'll get back XML.</p>

    Here is a sample Driver Resource Search By ID:
    <pre class="prettyprint">&lt;script&gt;
     $(document).ready(function () {
        var url="http://server.com/busapi/";
        var api_key="XXXXXXXXXXXXXXX";
        var ID=1;
          $.ajax({
              url: url+"driver/"+ID+"/"+api_key,
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