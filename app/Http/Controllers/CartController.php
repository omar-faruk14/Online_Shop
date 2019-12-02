<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Image;

use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
    	$qty=$request->qty;
    	$product_id=$request->product_id;

    	$product_info=DB::table('tbl_products')
    	->where('product_id',$product_id)
    	->first();

    	echo "<pre>";
    	print_r($product_info);
    	echo "</pre>";

    }
}
