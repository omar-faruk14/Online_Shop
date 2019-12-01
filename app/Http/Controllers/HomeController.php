<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class HomeController extends Controller


/*Home Content route and product information return this index function*/
{
   public function index()
    {
   	$all_published_product=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.categories_id','=','tbl_category.categories_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')     //join category and manufacture table
    



    ->select('tbl_products.*','tbl_category.categories_name','tbl_manufacture.manufacture_name')
    ->where('tbl_products.product_status',1)
    ->limit(6)
    ->get();


        
        $manage_published_product=view ('pages.home_content')
        ->with('all_published_product',$all_published_product);    //view product information home_content showing
        


        return view('pages.layout')
        ->with('pages.home_content',$manage_published_product); //return view pages layout


    	//return view('pages.home_content');
    }



    public function Show_Product_category($categories_id)
    {
      echo $categories_id;
    }
}
