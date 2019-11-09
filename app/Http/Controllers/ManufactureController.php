<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();


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

         $data['manufacture_id']=$request->manufacture_id;
         $data['manufacture_name']=$request->manufacture_name;
         $data['manufacture_description']=$request->manufacture_description;
         $data['Publication_status']=$request->Publication_status;

         DB::table('tbl_manufacture')->insert($data);
         Session::put('message','Add Category Successfully !');
         return Redirect('/add_manufacture');
    }
}
