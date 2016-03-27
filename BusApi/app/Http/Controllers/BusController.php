<?php
/**
 * Created by PhpStorm.
 * User: Ravindu
 * Date: 3/25/2016
 * Time: 9:41 PM
 */

namespace App\Http\Controllers;

use App\Bus;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller

{

    public function create(Request $request, $apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $bus = new Bus();
            $bus->bus_name=$request->input('bus_name');
            $bus->bus_reg_number=$request->input('bus_reg_number');
            $bus->bus_brand=$request->input('bus_brand');
            $bus->bus_seat_no=$request->input('bus_seat_no');
            $bus->bus_owner_name=$request->input('bus_owner_name');
            $bus->bus_contact_no=$request->input('bus_contact_no');
            $bus->user_id=$user[0]->id;
            $bus->save();
            return response()->json($bus);
        }
        else{
            return response()->json(["Your API Key is Not Valid"]);
        }

    }

    public function update(Request $request,$id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $bus=DB::select("SELECT * FROM buses WHERE  bus_id = '$id'");
            $bus->bus_name=$request->input('bus_name');
            $bus->bus_reg_number=$request->input('bus_reg_number');
            $bus->bus_brand=$request->input('bus_brand');
            $bus->bus_seat_no=$request->input('bus_seat_no');
            $bus->bus_owner_name=$request->input('bus_owner_name');
            $bus->save();
            return response()->json($bus);
        }
        else{
            return response()->json(["Your API Key is Not Valid"]);
        }
    }
    
    public function delete($id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $bus = DB::select("SELECT * FROM buses WHERE  bus_id = '$id'");
            $bus->delete();
            return response()->json('Deleted'.' '.$id);
        }
        else{
            return response()->json(["Your API Key is Not Valid"]);
        }
    }
    
    public function getById($id,$apiKey)
    {
        //return $bus_id. $apiKey;
        
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null) {

            $bus = DB::select("SELECT * FROM buses WHERE  bus_id = '$id'");
            return response()->json($bus);
        }
        else{
            return response()->json(["Your API Key is Not Valid"]);
        }
    }
    
    public function getByTitle($bus_name)
    {

        $bus = DB::select("SELECT b.bus_name,b.bus_reg_number,b.bus_brand,b.bus_seat_no,b.bus_owner_name,
                            b.bus_contact_no,r.route_number,r.route_name,r.starting_location,
                            r.finishing_location,r.estimated_time,
                            d.driver_name,d.driver_reg_number,
                            c.conductor_name, c.conductor_reg_number
                              FROM buses b
                              JOIN bus_routes r ON b.bus_id=r.b_id
                              JOIN drivers d ON b.bus_id=d.b_id
                              JOIN conductors c ON b.bus_id=c.b_id
                              WHERE b.bus_name='$bus_name'");

        return response()->json($bus);
    }
}