<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ManufactureController extends Controller
{
	//go to add manufacture page
    public function index()
    {
    	return view('admin.add_manufacture'); 
    }


    public function save_manufacture(Request $request)
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
}
