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
   $this->AdminAuthCheck();      //check valid admin or not
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

     	$extention=$file->getClientOriginalExtension();/*extention separate from picture*/
     	$filename=time().'.'.$extention;/*Rename image*/
     	$image_url= $file->move('upload/image/',$filename);/*move by this directory*/

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


// Showing All Product By this code


public function all_product()
{
    
       $this->AdminAuthCheck();//check valid admin or not
    $all_product_info=DB::table('tbl_products')
    ->join('tbl_category','tbl_products.categories_id','=','tbl_category.categories_id')
    ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
    ->get();
        
        $manage_product=view ('admin.all_product')
        ->with('all_product_info',$all_product_info);

        return view('admin.admin_layout')
        ->with('admin.all_product',$manage_product);



 }

/*Active Product*/
 public function unactive_product($product_id)
    {
        DB::table('tbl_products')
        ->where('product_id',$product_id)
        ->update(['product_status'=>0]);
        return Redirect('/all_product');

    }




/*Update Product Controller function*/

    public function active_product($product_id)
    {
        DB::table('tbl_products')
        ->where('product_id',$product_id)
        ->update(['product_status'=>1]);
        return Redirect('/all_product');

    }



/*Delete Product Controller*/

      public function delete_product($product_id)
    {
        DB::table('tbl_products') 
        ->where('product_id',$product_id)
        ->delete();
        Session::put('message','product Deleted Successfully !');
        return Redirect('/all_product');



    }


    /*Admin Authentacation Check By this function controller*/

     public function AdminAuthCheck()
    {

        $admin_id=session::get('admin_id');
       if ($admin_id) {
         return;
       }
       else
       {
        return Redirect::to('/admin')->send();
       }

   }


   }
