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


   
     




    echo "<pre>";
    print_r($data);
   echo "</pre>";


 }
   }
