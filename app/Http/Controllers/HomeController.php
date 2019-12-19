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

    public function profile(){
           return view('pages.profile');
    }








/*product individual category display function*/

    public function Show_Product_category($categories_id)
    {


      $Category_base_Product=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.categories_id','=','tbl_category.categories_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')     //join category and manufacture table
    ->select('tbl_products.*','tbl_category.categories_name','tbl_manufacture.manufacture_name')
    ->where('tbl_category.categories_id',$categories_id)
    ->where('tbl_products.product_status',1)
    ->limit(18)
    ->get();

        $manage_category_base=view ('pages.categories_base_product')
        ->with('Category_base_Product',$Category_base_Product);    //view product information categories_base_product showing
       
        return view('pages.layout')
        ->with('pages.categories_base_product',$manage_category_base); //return view pages layout
    	//return view('pages.categories_base_product');
    }







/*product individual manufacture display function*/
   public function Show_Product_manufacture($manufacture_id)
    {
$manufacture_base_product=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.categories_id','=','tbl_category.categories_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')     //join category and manufacture table
    
    ->select('tbl_products.*','tbl_category.categories_name','tbl_manufacture.manufacture_name')
    ->where('tbl_manufacture.manufacture_id',$manufacture_id)
    ->where('tbl_products.product_status',1)
    ->limit(18)
    ->get();       
        $manage_manufacture_product=view ('pages.manufacture_base_product')
        ->with('manufacture_base_product',$manufacture_base_product);    //view product information home_content showing
        
      return view('pages.layout')
        ->with('pages.manufacture_base_product',$manage_manufacture_product);

    }










/*view product information associated by this function via database data*/
    public function view_product($product_id)
    {
            $product_view_details=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.categories_id','=','tbl_category.categories_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')     //join category and manufacture table

    ->select('tbl_products.*','tbl_category.categories_name','tbl_manufacture.manufacture_name')
    ->where('tbl_products.product_status',1)
    ->where('tbl_products.product_id',$product_id)
    ->first();

      $manage_details_product=view ('pages.product_details')
        ->with('product_view_details',$product_view_details);    //view product information product_details showing
        
        return view('pages.layout')
        ->with('pages.product_details',$manage_details_product); //return view pages layout
        //return view('pages.product_details');
    }
    public function blog()
    {
   	$all_published_product=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.categories_id','=','tbl_category.categories_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')     //join category and manufacture table

    ->select('tbl_products.*','tbl_category.categories_name','tbl_manufacture.manufacture_name')
    ->where('tbl_products.product_status',1)
    ->limit(6)
    ->get();

      $manage_published_product=view ('pages.blog')
        ->with('all_published_product',$all_published_product);    //view product information home_content showing
        
        return view('pages.layout')
        ->with('pages.blog',$manage_published_product); //return view pages layout
    	//return view('pages.home_content');
    }



    
}
