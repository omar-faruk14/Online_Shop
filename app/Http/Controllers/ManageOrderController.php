<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class ManageOrderController extends Controller
{
    public function manage_order()
    {
    	echo "Check Manage Order";
    }
}
