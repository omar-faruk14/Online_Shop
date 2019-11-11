<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Image;

use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class productController extends Controller
{

	// For add product set web route function

public function index()
{
	return view('admin.add_product');
}

// For Save Product function

public function save_product(Request $request)

{
    $data=array();
    $data['product_name']=$request->product_name;
    $data['Categories_id']=$request->Categories_id;
    $data['manufacture_id']=$request->manufacture_id;
    $data['product_short_description']=$request->product_short_description;
    $data['product_long_description']=$request->product_long_description;
    $data['product_price']=$request->product_price;
    $data['product_size']=$request->product_size;
    $data['product_color']=$request->product_color;
    $data['product_status']=$request->product_status;


   
     if($request->hasfile('product_image'))
     {

     	$file=$request->product_image;

     	$extention=$file->getClientOriginalExtension();
     	$filename=time().'.'.$extention;
     	$image_url= $file->storeAS('public/upload',$filename);

     	$success=$image_url;


          if($success)

      {
        $data['product_image']=$image_url;
   		DB::table('tbl_products')->insert($data);
		 Session::put('message','Product Add Successfully !');
        return Redirect('/add_product');
    	}

     }







 }
   }
