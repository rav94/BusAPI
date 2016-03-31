@extends('Home.layout')
@section('sidebar')
    @include('Home.include.sidebar')
@endsection
@section('content')
    <h2> Authentication Process</h2>
    <br>
    <h3 id="welcome">How to get Authenticated?</h3>
    <h4><p>Each request and response done with BUS API is authenticated with a secure API key,
        which is unique for each user, that signs up with BUS API. They will have their own portal
        to add data to the BUS API public database and view, all the data that's being inserted into
        by them.
            <br>

        Creation of this secure key is super easy. Just sign up with us and we will create an unique key
        just for you.</p></h4>
        <br><br>
        <span style="color:red;">*</span>All the data that's been submitted to the BUS API public database,
            is well curated by the Bus API Team.</p>



@endsection