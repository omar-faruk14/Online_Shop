<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class SuperAdminController extends Controller
{
    public function logout()
    {
    	//Session::put('admin_name',null);
    	//Session::put('admin_name',null);

    	Session::flush();
    	return Redirect::to('/admin');
    }
}
