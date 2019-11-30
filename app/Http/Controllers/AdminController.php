<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();
class AdminController extends Controller
{


  /*Admin Login Panel Route Function*/
    public function index()
    {
    	return view('admin.admin_login'); //redirect admin.blade.php
    }




/*Showing Dashboard checking by email and password*/
   
    public function dashboard(Request $request)
    {
    	/*check admin email and password from database*/
    	$admin_email=$request->admin_email;
    	$admin_password=md5($request->admin_password);
    	$result=DB::table('tbl_admin')  //access table 
    	->where('admin_email',$admin_email)   //check email
    	->where('admin_password',$admin_password)   //check password
    	->first();
    	
          
          if($result)
          {

            /*If result success then session put admin name and admin_id*/
              Session::put('admin_name',$result->admin_name);
              Session::put('admin_id',$result->admin_id);
              return Redirect::to('/dashboard');
          }

          else
          {
              Session::put('message','email or password invalid');
              return Redirect::to('/admin');//redirect to admin
          }


    	exit();

    }
}
