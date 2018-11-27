<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Session;
session_start();

class AdminController extends Controller
{

    public function admin_dashboard(){

      return view('admin.dashboard');


    }
 //logout

    public function logout()
    {

     Session::put('admin_name',null);
     Session::put('admin_id',null);

     return Redirect::to('/backend');


    }

//login dashboard for admin
    public function login_dashboard(Request $request)
    {
    	//return view('admin.dashboard');
    	$email=$request->admin_email;
    	$password=$request->admin_password;
    	$result=DB::table('admin_tbl')
    	->where ('admin_email',$email)
    	->where ('admin_password',$password)
    	->first();

    	if($result){

            Session::put('admin_email',$result->admin_email);
            Session::put('admin_id',$result->admin_id);

    		return Redirect::to('/admin_dashboard');
    		//echo"welcome";
    	}
    	else{

            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/backend');
           //echo"Not welcome";
    	}
    }
}
