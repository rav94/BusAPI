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

    <p>The API Resource page for the Conductor Resource. You can easily create, update, delete a conductor resource
        and get the title by the ID in each conductor resource.</p>

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
    <h4>Creating a Conductor Resource (HTTP POST)</h4>
    <div class="callout code"><p>POST: busapi/conductor/create/{apiKey}</p></div>
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
            <td>conductor_name</td>
            <td>Conductor Name</td>
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
            <td>Conductor NIC Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>conductor_reg_no</td>
            <td>Conductor Registration Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Updating a Conductor Resource (HTTP PUT)</h4>
    <div class="callout code"><p>PUT: busapi/conductor/update/{id}/{apiKey}</p></div>
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
            <td>conductor_id</td>
            <td>Id of the Conductor</td>
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
            <td>conductor_name</td>
            <td>Conductor Name</td>
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
            <td>Conductor NIC Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>conductor_reg_no</td>
            <td>Conductor Registration Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Deleting a Conductor Resource (HTTP DELETE)</h4>
    <div class="callout code"><p>DELETE: busapi/conductor/delete/{id}/{apiKey}</p></div>
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
            <td>conductor_id</td>
            <td>Id of the Route</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Get a Conductor By ID (HTTP GET)</h4>
    <div class="callout code"><p>GET: busapi/conductor/{id}/{apiKey}</p></div>
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
            <td>conductor_id</td>
            <td>Id of the Conductor</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>

    <h4>Example</h4>
    <p>Here's a sample call to update /conductor/1. JSON format is shown. Be sure to set "Accept" and
        "Content-Type" headers in your request to "application/json",
        otherwise you'll get back XML.</p>

    Here is a sample Conductor Resource Search By ID:
    <pre class="prettyprint">&lt;script&gt;
     $(document).ready(function () {
        var url="http://server.com/busapi/";
        var api_key="XXXXXXXXXXXXXXX";
        var ID=1;
          $.ajax({
              url: url+"conductor/"+ID+"/"+api_key,
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