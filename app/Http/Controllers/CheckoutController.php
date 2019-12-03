<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class CheckoutController extends Controller
{

	/*login page route set*/
   public function login_check()
   {
   	return view('pages.login');
   }




/*user registration and  data from sign up form*/
   public function customer_registration(Request $request)
   {
     $data=array();
     
     $data['customer_name']=$request->customer_name;
     $data['customer_email']=$request->customer_email;
     $data['customer_password']=$request->customer_password;
     $data['customer_mobile_number']=$request->Mobile_Number;

     $customer_id=DB::table('tbl_customer')
     ->insertGetId($data);
     session::put('customer_id',$customer_id);
      session::put('customer_name',$request->customer_name);
     

     return Redirect('/checkout');
   }


   public function checkout()
   {
   	return view('pages.checkout');
   }
}
