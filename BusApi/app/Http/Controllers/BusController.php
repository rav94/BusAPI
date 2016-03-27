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
            return response()->json(["Not validate API key"]);
        }

    }

    public function update(Request $request,$id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $bus=Bus::find($id);
            $bus->bus_name=$request->input('bus_name');
            $bus->bus_reg_number=$request->input('bus_reg_number');
            $bus->bus_brand=$request->input('bus_brand');
            $bus->bus_seat_no=$request->input('bus_seat_no');
            $bus->bus_owner_name=$request->input('bus_owner_name');
            $bus->save();
            return response()->json($bus);
        }
        else{
            return response()->json(["Not validate API key"]);
        }
    }
    public function delete($id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $bus = Bus::find($id);
            $bus->delete();
            return response()->json('deleted');
        }
        else{
            return response()->json(["Not validate API key"]);
        }
    }
    public function getById($id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null) {
            $bus = Bus::find($id);
            return response()->json($bus);
        }
        else{
            return response()->json(["Not validate API key"]);
        }
    }
    public function getByTitle($busName)
    {
        $bus = DB::select("SELECT * FROM buses WHERE bus_name='$busName'");
        return response()->json($bus);
    }
    

}