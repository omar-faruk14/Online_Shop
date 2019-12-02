<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use App\Http\Requests;
use App\Image;

use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $quantity= $request->qty;
        $product_id = $request->product_id;
        $product_info = DB::table('tbl_products')
                        ->where('product_id',$product_id)
                        ->first();
        $data['quantity'] =$quantity;
        $data['id']  = $product_info->product_id;
        $data['name']  = $product_info->product_name;
        $data['price']  = $product_info->product_price;
        $data['attributes']['image']  = $product_info->product_image;
        Cart::add($data);
        return Redirect::to('/show_cart');


    }

    public function show_cart()
    {
    	$all_published_category = DB::table('tbl_category')
                                    ->where('publication_status',1)
                                    ->get();
        $manage_published_category = view('pages.add_to_cart')
                                    ->with('all_published_category', $all_published_category);
        return view('pages.layout')
            ->with('pages.add_to_cart', $manage_published_category);
    }
}
