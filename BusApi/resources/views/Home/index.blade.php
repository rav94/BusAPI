@extends('Home.layout')
@section('sidebar')
    @include('Home.include.sidebar')
@endsection
@section('content')
    <h2> Getting Started</h2>
    <h3 id="welcome">What is Bus API?</h3>
    <h4><p>Do you ever wanted to obtain details about Bus Transportation Network in Sri Lanka
            and expose them to your users? Then beware, BUS API will take care of all those stuff and make
            you left out with nothing to do!</p></h4>

    <p> BUS API is an super simple, rest based API to obtain details about the Bus
        Transportation network in Sri Lanka. Bus API offers you all the super important data related with buses.
        The only thing you have to do is just create an account, make sure you obtain the secure API key, and start
        playing. You can also add and update your own data sets about Sri Lankan buses within seconds and expose
        them to your end users.
        <br>
        All the data that's been submitted to the database, is well curated by the Bus API Team, so nothing to
        worry about the reliability.</p>

    <h3 id="welcome">What can I do with Bus API?</h3>
    <ul>
        <li>Access all the reliable data about Sri Lankan Busses, Bus Routes, Drivers & Conductors.</li>
        <li>Add your own datasets to the BUS API public database.</li>
        <li>Ability to perform CRUD operations.</li>
        <li>Obtain all the responses In JSON Format.</li>
        <li>Simple and easy accessing, coz Bus API is REST!</li>
        <li>All above, its FREE!</li>
    </ul>

    <h3 id="welcome">Why should I use BUS API?</h3>
    <ul>
        <li>You won't find all these super awesome data sets for free of charge from anywhere unless from us.</li>
        <li>the BUS API team make sure all the data sets are well curated and reliable to your end users.</li>
        <li>When it comes to security, BUS API team had made sure that our users are being well secured with
        secure tokens and encrypted passwords.</li>
    </ul>
    <br>
    <h2>So why are you waiting! Join with the BUS API community today!</h2>

@endsection