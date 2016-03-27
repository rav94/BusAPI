<?php
/**
 * Created by PhpStorm.
 * User: Ravindu
 * Date: 3/25/2016
 * Time: 9:49 PM
 */

namespace App\Http\Controllers;

use App\Conductor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConductorController extends Controller

{
    public function create(Request $request,$apiKey)
    {
        $user=DB::select("SELECT * FROM users WHERE token='$apiKey'");
        if($user!=null)
        {
            $conductor=new Conductor();
            $conductor->b_id=$request->input('b_id');
            $conductor->conductor_name=$request->input('conductor_name');
            $conductor->contact_number=$request->input('contact_number');
            $conductor->nic_number=$request->input('nic_number');
            $conductor->conductor_reg_number=$request->input('conductor_reg_number');
            $conductor->user_id=$user[0]->id;
            $conductor->save();
            return response()->json($conductor);
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
            $conductor=DB::select("SELECT * FROM conductors WHERE conductor_id = '$id'");
            $conductor->b_id=$request->input('b_id');
            $conductor->conductor_name=$request->input('conductor_name');
            $conductor->contact_number=$request->input('contact_number');
            $conductor->nic_number=$request->input('nic_number');
            $conductor->conductor_reg_number=$request->input('conductor_reg_number');
            $conductor->save();
            return response()->json($conductor);
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
            $conductor=DB::select("SELECT * FROM conductors WHERE conductor_id = '$id'");
            $conductor->delete();
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
            $conductor=DB::select("SELECT * FROM conductors WHERE conductor_id = '$id'");
            return response()->json($conductor);
        }
        else
        {
            return response()->json(["Your API Key is Not Valid"]);
        }
    }



}