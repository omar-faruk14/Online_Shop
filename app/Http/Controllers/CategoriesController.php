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
        $this->AdminAuthCheck();
      return view('admin.add_categories');

    }




//for show all categories
    public function all_categories()
    {
           $this->AdminAuthCheck();

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

    public function unactive_category($Categories_id)
    {
    	DB::table('tbl_category')
    	->where('Categories_id',$Categories_id)
    	->update(['Publication_status'=>0]);
    	return Redirect('/all_categories');

    }


    public function active_category($Categories_id)
    {
    	DB::table('tbl_category')
    	->where('Categories_id',$Categories_id)
    	->update(['Publication_status'=>1]);
    	return Redirect('/all_categories');

    }

    public function edit_category($Categories_id)
    {
       $this->AdminAuthCheck();
       $category_info=DB::table('tbl_category')
       ->where('Categories_id',$Categories_id)
       ->first();

       $manage_edit_category=view ('admin.edit_category')
    	->with('category_info',$category_info);

    	return view('admin.admin_layout')
    	->with('admin.edit_category',$manage_edit_category);

    	
    }

    public function update_category(Request $request,$Categories_id)
    {
    	$data=array();

         $data['Categories_name']=$request->Categories_name;
         $data['Categories_description']=$request->Categories_description;
         DB::table('tbl_category')
    	->where('Categories_id',$Categories_id)
    	->update($data);
    	Session::put('message','Update Category Successfully !');
    	return Redirect('/all_categories');

    }

    public function delete_category($Categories_id)
    {
    	DB::table('tbl_category') 
    	->where('Categories_id',$Categories_id)
    	->delete();
    	Session::put('message','Category Deleted Successfully !');
    	return Redirect('/all_categories');



    }


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
