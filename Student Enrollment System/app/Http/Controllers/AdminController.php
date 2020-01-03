<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
Session_start();

class AdminController extends Controller
{

    public function admin_dashboard()
    {
        return view('admin.dashboard'); 
    }


    //View Profile Part are here
    public function viewprofile()
    {
        return view('admin.viewprofile'); 
    }


    // setting that mean update password
    public function setting()
    {
        return view('admin.setting'); 
    }


    //Logout Part
    public function logout()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);

        return Redirect::to('/backend');
    }



    // Login DashBoard For Admin

    public function login_dashboard(Request $request)
    {
        //return view('admin.dashboard');
        $email    = $request->admin_email;
        $password = md5($request->admin_password);
        $result   = DB::table('admin_tbl')
                ->where('admin_email',$email)
                ->where('admin_password',$password)
                ->first();  //একটা টেবিল হলে first(); একাধিক টেবিল হলে get();

        if ($result) 
        {
             Session::put('admin_email',$result->admin_email);  //put() means as like set()
             Session::put('admin_id',$result->admin_id);
             return redirect::to('/admindashboard');  //then it call admin_dashboard Method          
        }
        else 
        {
            Session::put('exception','Email or Password Invalid');
            return redirect::to('/backend');
        }
    }

    
}
