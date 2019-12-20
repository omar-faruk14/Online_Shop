<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class user extends Controller
{
    public function profile($customer_id)
{
     $user_view_details=DB::table('tbl_customer')
    ->where('customer_id',$customer_id)
    ->first();

      $manage_details_user=view ('pages.profile')
        ->with('user_view_details',$user_view_details);    //view product information profile showing
        
        return view('pages.layout')
        ->with('pages.profile',$manage_details_user); //return view pages layout
        //return view('pages.profile');
}


public function google_login()
{

 


	return view('pages.google_login');
}

}
