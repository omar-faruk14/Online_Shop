<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
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




/*Customer Login Function Controller*/
public function customer_login(Request $request)
    {

$customer_email=$request->customer_email;
$customer_password=$request->customer_password;


$result=DB::table('tbl_customer')
->where('customer_email',$customer_email)
->where('customer_password',$customer_password)
->first();
  

  if($result)
          {

            /*If result success then session put Customer name and Customer_id*/
              Session::put('customer_id',$result->customer_id);
              Session::put('customer_name',$result->customer_name);
              return Redirect::to('/checkout');
          }

          else
          {
              Session::put('message','email or password invalid');
              return Redirect::to('/login_check');//redirect to Customer
          }
    }



 public function order_place(Request $request)

{

  /*Payment Table Data Insert*/
  $payment_method=$request->payment_method;
  $pdata=array();
  $pdata['payment_method']=$payment_method;
  $pdata['payment_status']='pending';
  $payment_id=DB::table('tbl_payment')
  ->insertGetId($pdata);

  $content= Cart::getContent();


  /*Order Table Data Insert*/

     $odata=array();
     $odata['customer_id']=Session::get('customer_id');
     $odata['Shipping_id']=Session::get('Shipping_id');
     $odata['payment_id']=$payment_id;

     $odata['order_total']=Cart::getTotal();
     $odata['order_status']='pending';
     $order_id=DB::table('tbl_order')
  ->insertGetId($odata);


  $od_data=array();


  /*Order Deatils Tabale Data Insert*/

  foreach ( $content as $v_content) {
    $od_data['order_id']=$order_id;
    $od_data['product_id']=$v_content->id;
    $od_data['product_name']=$v_content->name;
    $od_data['product_price']=$v_content->price;
    $od_data['product_sales_quantity']=$v_content->quantity;
    DB::table('tbl_order_details')
       ->insert($od_data);


       if($payment_method=='Handcash')
       {
        return view('payment_method.handcash');
       }

       else if($payment_method=='Bkash')
       {
        return view('payment_method.bkash');
       }
       
       else
       {
        return view('payment_method.rocket');
       }
    
  }
   






  
}



}