@extends('Home.layout')
@section('sidebar')
    @include('Home.include.sidebar')
@endsection
@section('content')
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>


    <h3 id="view_type">Buses</h3>

    <p>The API Resource page for the Bus Resource. You can easily create, update, delete a bus resource
        and also get the title and get the title by the ID in each bus resource.</p>

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
            <td>Bus</td>
            <td>Allowed</td>
            <td>Allowed</td>
            <td>Allowed</td>
            <td>Not Allowed</td>
            <td>Allowed</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Creating a Bus Resource (HTTP POST)</h4>
    <div class="callout code"><p>POST: busapi/bus/create/{apiKey}</p></div>
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
            <td>bus_name</td>
            <td>Name of the Bus</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_register_number</td>
            <td>Bus Register Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_brand</td>
            <td>Bus Brand</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_seat_no</td>
            <td>Bus Seat Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_owner_name</td>
            <td>Bus Owner Name</td>
            <td>No</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_contact_no</td>
            <td>Bus Owner Contact</td>
            <td>No</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Updating a Bus Resource (HTTP PUT)</h4>
    <div class="callout code"><p>PUT: busapi/bus/update/{id}/{apiKey}</p></div>
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
            <td>bus_name</td>
            <td>Name of the Bus</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_register_number</td>
            <td>Bus Register Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_brand</td>
            <td>Bus Brand</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_seat_no</td>
            <td>Bus Seat Number</td>
            <td>Yes</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_owner_name</td>
            <td>Bus Owner Name</td>
            <td>No</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>bus_contact_no</td>
            <td>Bus Owner Contact</td>
            <td>No</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

    <br>
    <h4>Deleting a Bus Resource (HTTP DELETE)</h4>
    <div class="callout code"><p>DELETE: busapi/bus/delete/{id}/{apiKey}</p></div>
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
        </tbody>
    </table>

    <br>
    <h4>Get a Bus By ID (HTTP GET)</h4>
    <div class="callout code"><p>GET: busapi/bus/{id}/{apiKey}</p></div>
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
        </tbody>
    </table>

    <br>
    <h4>Get a Bus Resource By Bus Name (HTTP GET)</h4>
    <div class="callout code"><p>GET: busapi/bus/{bus_name}</p></div>
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
            <td>bus_name</td>
            <td>Name of the Bus</td>
            <td>Yes</td>
            <td>No</td>
        </tr>
        </tbody>
    </table>

    <h4>Example</h4>
    <p>Here's a sample call to /bus/1. JSON format is shown. Be sure to set "Accept" and
        "Content-Type" headers in your request to "application/json",
        otherwise you'll get back XML. Also be sure to remove the space of bus names when
    you are obtaining data by bus name.</p>

    Here is a sample Bus Resource Search By ID:
    <pre class="prettyprint">&lt;script&gt;
     $(document).ready(function () {
        var url="http://server.com/busapi/";
        var api_key="XXXXXXXXXXXXXXX";
        var ID=1;
          $.ajax({
              url: url+"bus/"+ID+"/"+api_key,
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
&lt;/script&gt;</pre>
    Here is a sample Bus Resource Search By Bus Name:
    <pre class="prettyprint">&lt;script&gt;
     $(document).ready(function () {
        var url="http://server.com/busapi/";
        var busName="MataraExpress";
          $.ajax({
              url: url+"bus/"+busName,
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
&lt;/script&gt;</pre>

    <hr>
@endsection