<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
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
    echo "test";

}





  }
