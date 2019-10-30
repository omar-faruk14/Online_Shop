<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class CategoriesController extends Controller
{
    public function index()
    {
      return view('admin.add_categories');

    }




//for show all categories
    public function all_categories()
    {


    	$all_category_info=DB::table('tbl_category')->get();
    	
    	$manage_category=view ('admin.all_categories')
    	->with('all_category_info',$all_category_info);

    	return view('admin.admin_layout')
    	->with('admin.all_categories',$manage_category);
    	


    	//return view('admin.all_categories');
    }

    public function save_categories(Request $request)

    {
         $data=array();

         $data['Categories_id']=$request->Categories_id;
         $data['Categories_name']=$request->Categories_name;
         $data['Categories_description']=$request->Categories_description;
         $data['Publication_status']=$request->Publication_status;

         DB::table('tbl_category')->insert($data);
         Session::put('message','Add Category Successfully !');
         return Redirect('/add_categories');
        
    }

    public function unactive_category()
    {
    	echo 'Test';
    }

}
