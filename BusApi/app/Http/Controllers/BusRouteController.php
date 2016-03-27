<?php
/**
 * Created by PhpStorm.
 * User: Ravindu
 * Date: 3/25/2016
 * Time: 9:49 PM
 */

namespace App\Http\Controllers;

use App\BuRoute;
use App\BusRoute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusRouteController extends Controller

{
    public function create(Request $request,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $busroute=new BusRoute();
            $busroute->b_id=$request->input('b_id');
            $busroute->route_number=$request->input('route_number');
            $busroute->route_name=$request->input('route_name');
            $busroute->starting_location=$request->input('starting_location');
            $busroute->finishing_location=$request->input('finishing_location');
            $busroute->estimated_time=$request->input('estimated_time');
            $busroute->user_id=$user[0]->id;
            $busroute->save();
            return response()->json($busroute);
        }
        else{
            return response()->json(["Your API Key is Not Valid"]);
        }
    }
    public function  update(Request $request,$id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $busroute=DB::select("SELECT * FROM bus_routes WHERE  route_id = '$id'");
            $busroute->b_id=$request->input('b_id');
            $busroute->route_number=$request->input('route_number');
            $busroute->route_name=$request->input('route_name');
            $busroute->starting_location=$request->input('starting_location');
            $busroute->finishing_location=$request->input('finishing_location');
            $busroute->estimated_time=$request->input('estimated_time');
            $busroute->save();
            return response()->json($busroute);
        }
        else
        {
            return response()->json(["Your API Key is Not Valid"]);
        }
    }
    public function delete($id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $busroute=DB::select("SELECT * FROM bus_routes WHERE  route_id = '$id'");
            $busroute->delete();
            return response()->json('Deleted'.' '.$id);
        }
        else
        {
            return response()->json(["Your API Key is Not Valid"]);
        }
    }
    
    public function getById($id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $busroute=DB::select("SELECT * FROM bus_routes WHERE  route_id = '$id'");
            return response()->json($busroute);
        }
        else
        {
            return response()->json(["Your API Key is Not Valid"]);
        }
    }




}