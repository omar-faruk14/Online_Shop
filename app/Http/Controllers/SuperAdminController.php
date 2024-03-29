<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class SuperAdminController extends Controller
{
    

    /*Admin Dashboard Redirect Function*/

    public function index()
    {
    	$this->AdminAuthCheck();//valid admin user check
    	return view('admin.admin_dashboard'); //redirect admin_dashboard.blade.php
    }







/*Logout function flush User_Name and password*/
    public function logout()
    {

    	Session::flush();  //flush all session
    	return Redirect::to('/admin');
    }




/*Main Authentacation checking function for admin access*/
    public function AdminAuthCheck()
    {

    	$admin_id=session::get('admin_id'); 
       if ($admin_id) {
       	 return;
       }
       else
       {
       	return Redirect::to('/admin')->send();
       }
    }

}
