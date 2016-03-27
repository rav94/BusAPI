<?php
/**
 * Created by PhpStorm.
 * User: Ravindu
 * Date: 3/25/2016
 * Time: 9:49 PM
 */

namespace App\Http\Controllers;

use App\Driver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller

{
    public function create(Request $request,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $driver=new Driver();
            $driver->b_id=$request->input('b_id');
            $driver->driver_name=$request->input('driver_name');
            $driver->contact_number=$request->input('contact_number');
            $driver->nic_number=$request->input('nic_number');
            $driver->driver_reg_number=$request->input('driver_reg_number');
            $driver->user_id=$user[0]->id;
            $driver->save();
            return response()->json($driver);
        }
        else{
            return response()->json(["Not validate API key"]);
        }
    }
    public function  update(Request $request,$id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $driver=Driver::find($id);
            $driver->b_id=$request->input('b_id');
            $driver->driver_name=$request->input('driver_name');
            $driver->contact_number=$request->input('contact_number');
            $driver->nic_number=$request->input('nic_number');
            $driver->driver_reg_number=$request->input('driver_reg_number');
            $driver->save();
            return response()->json($driver);
        }
        else
        {
            return response()->json(["Not validate API key"]);
        }
    }
    public function delete($id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $driver=Driver::find($id);
            $driver->delete();
            return response()->json('Deleted');
        }
        else
        {
            return response()->json(["Not validate API key"]);
        }
    }
    public function getById($id,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $driver=Driver::find($id);
            return response()->json($driver);
        }
        else
        {
            return response()->json(["Not validate API key"]);
        }
    }

}