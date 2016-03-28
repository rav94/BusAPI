<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//$app->get('/', function () use ($app) {
//    return "Hi there Welcome to Bus API";
//});

//$app->get('/key', function() {
//    return str_random(32);
//});

//Routes for documentation

$app->get('/', function () use ($app) {
    return view('Home.index');
});

$app->get('buses', function () use ($app) {
    return view('Home.include.buses');
});

$app->get('busroutes', function () use ($app) {
    return view('Home.include.busroutes');
});

$app->get('drivers', function () use ($app) {
    return view('Home.include.drivers');
});

$app->get('conductors', function () use ($app) {
    return view('Home.include.conductors');
});

$app->get('authentication', function () use ($app) {
    return view('Home.include.authentication_process');
});


//API Client Application Routes

//User Routes
$app->get('user', 'UserController@index');
$app->post('user/create','UserController@create');
$app->post('user/log','UserController@log');
$app->get('user/login','UserController@login');
$app->get('user/logout','UserController@logout');
$app->get('user/busapi','UserController@interactions');

//API Routes
 
//Bus
$app->post('busapi/bus/create/{apiKey}','BusController@create');
$app->put('busapi/bus/update/{id}/{apiKey}','BusController@update');
$app->delete('busapi/bus/delete/{id}/{apiKey}','BusController@delete');
$app->get('busapi/bus/{id}/{apiKey}','BusController@getById');
$app->get('busapi/bus/{bus_name}','BusController@getByTitle');

//BusRoutes
$app->post('busapi/busroute/create/{apiKey}','BusRouteController@create');
$app->put('busapi/busroute/update/{id}/{apiKey}','BusRouteController@update');
$app->delete('busapi/busroute/delete/{id}/{apiKey}','BusRouteController@delete');
$app->get('busapi/busroute/{id}/{apiKey}','BusRouteController@getById');

//Driver
$app->post('busapi/driver/create/{apiKey}','DriverController@create');
$app->put('busapi/driver/update/{id}/{apiKey}','DriverController@update');
$app->delete('busapi/driver/delete/{id}/{apiKey}','DriverController@delete');
$app->get('busapi/driver/{id}/{apiKey}','DriverController@getById');

//Conductor
$app->post('busapi/conductor/create/{apiKey}','ConductorController@create');
$app->put('busapi/conductor/update/{id}/{apiKey}','ConductorController@update');
$app->delete('busapi/conductor/delete/{id}/{apiKey}','ConductorController@delete');
$app->get('busapi/conductor/{id}/{apiKey}','ConductorController@getById');