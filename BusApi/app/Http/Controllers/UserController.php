<?php
/**
 * Created by PhpStorm.
 * User: Ravindu
 * Date: 3/25/2016
 * Time: 11:58 PM
 */

namespace App\Http\Controllers;

use App\Bus;
use App\BuRoute;
use App\BusRoute;
use App\Driver;
use App\Conductor;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class UserController extends Controller

{

    public function create(Request $request)
    {
        $token=null;
        $details= User::orderBy('id', 'DESC')->first();
        if($details!=null)
        {
            $id=$details->id;
            $userIdToken=$id+1; //Setting to obtain user_id -> to make token unique
            $random = str_random(13);
            $random1 = str_random(3);
            $token= $random.$userIdToken.$random1;
        }
        else
        {
            $token='nSPn2Q8qsB4UPny';
        }
        $user=new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Crypt::encrypt($request->input('password'));
        $user->token=$token;
        $user->save();
        return redirect('user');
    }

    public function login()
    {
        return view('Home.login', ['error'=>'', 'alert'=>'alert alert-danger']);
    }

    public function log(Request $request)
    {
        $email=$request->Input('email');

        $status=User::where('email','=',$email)->first();
        
        if($status!=null)
        {
            $decrypted = Crypt::decrypt($status->password);

            if ($decrypted==$request->Input('password'))
            {
                session_start();
                $_SESSION['userid'] = $status->id;
                $_SESSION['token'] = $status->token;
                return redirect('user');
            }
            else
            {
                return view('Home.login', ['error'=>'Username or password is incorrect, please check again!', 'alert'=>'alert alert-danger']);
            }
        }
        else
        {
            return redirect('../user/login/');
        }
    }
    public function index()
    {
        session_start();
        if (isset($_SESSION['userid']))
        {
            $id = $_SESSION['userid'];
            $user=User::where('id','=',$id)->first();
            $bus=Bus::where('user_id','=',$id)->get()->all();
            $busRoutes=BusRoute::where('user_id','=',$id)->get()->all();
            $driver=Driver::where('user_id','=',$id)->get()->all();
            $conductor=Conductor::where('user_id','=',$id)->get()->all();
            return view('Home.userData', ['bus'=>$bus,'broute'=>$busRoutes,'dri'=>$driver,'con'=>$conductor,'usr'=>$user]);
        }
        else
        {
            return redirect('user/login');
        }
    }
    
    public function logout()
    {
        session_start();
        session_destroy();
        return redirect('/');
    }
    
    public function interactions()
    {
        session_start();
        $id = $_SESSION['userid'];
        $user=User::where('id','=',$id)->first();
        $busData = DB::select("SELECT * FROM buses WHERE user_id = '$id'");
        return view('Home.interaction',['usr'=>$user], ['busData'=>$busData]);
    }

    public  function apiToken()
    {
        session_start();
        $id = $_SESSION['userid'];
        $user=User::where('id','=',$id)->first();
        return view('Home.apiKey',['usr'=>$user]);
    }


}