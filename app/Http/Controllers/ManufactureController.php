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
           $this->AdminAuthCheck();//check valid admin or not
    	return view('admin.add_manufacture'); 
    }

    //Save manufacture by this function

    public function save_manufacture(Request $request)
    {
    	$data=array();

         $data['manufacture_id']=$request->manufacture_id;
         $data['manufacture_name']=$request->manufacture_name;
         $data['manufacture_description']=$request->manufacture_description;
         $data['Publication_status']=$request->Publication_status;

         DB::table('tbl_manufacture')->insert($data);
         Session::put('message','Add manufacture Successfully !');
         return Redirect('/add_manufacture');
    }

    // by this function show all manufacture in the manufacture page

    public function all_manufacture()
    {
        

     $this->AdminAuthCheck();
        $all_manufacture_info=DB::table('tbl_manufacture')->get();
        
        $manage_manufacture=view ('admin.all_manufacture')
        ->with('all_manufacture_info',$all_manufacture_info);

        return view('admin.admin_layout')
        ->with('admin.all_manufacture',$manage_manufacture);
        

    }


  // This Function Unactive manufacture

    public function unactive_manufacture($manufacture_id)
    {
        DB::table('tbl_manufacture')
        ->where('manufacture_id',$manufacture_id)
        ->update(['Publication_status'=>0]);
        return Redirect('/all_manufacture');

    }

 // This fuction Active Manufacture

    public function active_manufacture($manufacture_id)
    {
        DB::table('tbl_manufacture')
        ->where('manufacture_id',$manufacture_id)
        ->update(['Publication_status'=>1]);
        return Redirect('/all_manufacture');

    }


      //this function delete manufacture

    public function delete_manufacture($manufacture_id)
    {
        DB::table('tbl_manufacture') 
        ->where('manufacture_id',$manufacture_id)
        ->delete();
        Session::put('message','manufacture Deleted Successfully !');
        return Redirect('/all_manufacture');



    }

    // this function edit manufacture items

          public function edit_manufacture($manufacture_id)
    {

       $manufacture_info=DB::table('tbl_manufacture')
       ->where('manufacture_id',$manufacture_id)
       ->first();

       $manage_edit_manufacture=view ('admin.edit_manufacture')
        ->with('manufacture_info',$manufacture_info);

        return view('admin.admin_layout')
        ->with('admin.edit_manufacture',$manage_edit_manufacture);

        
    }


    public function update_manufacture(Request $request,$manufacture_id)
    {
        $data=array();

         $data['manufacture_name']=$request->manufacture_name;
         $data['manufacture_description']=$request->manufacture_description;
         DB::table('tbl_manufacture')
        ->where('manufacture_id',$manufacture_id)
        ->update($data);
        Session::put('message','Update manufacture Successfully !');
        return Redirect('/all_manufacture');

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
