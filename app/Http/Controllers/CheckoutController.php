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
     Session::put('customer_id',$customer_id);
      Session::put('customer_name',$request->customer_name);
     

     return Redirect::to('/checkout');
   }



   /*by this route checkout page*/

   public function checkout()
   {
   	return view('pages.checkout');
   }






/*Insert Shipping Information*/

   public function save_shipping_Details(Request $request)
   {
   	 $data=array();
   	 $data['shipping_email']=$request->shipping_email;
   	 $data['shipping_first_name']=$request->shipping_first_name;
   	 $data['shipping_last_name']=$request->shipping_last_name;
   	 $data['shipping_address']=$request->shipping_address;
   	 $data['shipping_mobile_number']=$request->shipping_mobile_number;
   	 $data['shipping_city']=$request->shipping_city;

   	 $Shipping_id=DB::table('tbl_shipping')
     ->insertGetId($data);



     Session::put('Shipping_id',$Shipping_id);
     Session::put('customer_name',$request->customer_name);
     return Redirect::to('/payment');
   }




/*through payment page*/

     public function payment()
     {
     	return view('pages.payment');

     }



/*customer logut Page*/
     public function customer_logout()
     {
     	Session::flush();  //flush all session
    	return Redirect::to('/');
     }






}
