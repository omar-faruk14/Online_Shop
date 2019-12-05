<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class ManageOrderController extends Controller


/*Manage Order Controller Function*/
{
    public function manage_order()
    {
    	$all_manage_order_info=DB::table('tbl_order')
    ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
    ->select('tbl_order.*','tbl_customer.customer_name')
    ->get();
        
        $manage_order=view ('admin.manage_order')
        ->with('all_manage_order_info',$all_manage_order_info);

        return view('admin.admin_layout')
        ->with('admin.manage_order',$manage_order);

    }



    /*Manage Order Accept function*/
    public function active_order($order_id)
    {
    	DB::table('tbl_order')
    	->where('order_id',$order_id)
    	->update(['order_status'=>'Accept']);
    	return Redirect('/manage_order');

    }


/*manually admin can unactive order*/

     public function unactive_order($order_id)
    {
    	DB::table('tbl_order')
    	->where('order_id',$order_id)
    	->update(['order_status'=>'pending']);
    	return Redirect('/manage_order');

    }


    /*Admin Can delete order By this function */

    public function delete_order($order_id)
    {
    	DB::table('tbl_order') 
    	->where('order_id',$order_id)
    	->delete();
    	Session::put('message','order Deleted Successfully !');
    	return Redirect('/manage_order');



    }





    public function view_order($order_id)
    {
    	echo $order_id;
    }

}
