<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function index()
    {
    	return view('admin.add_manufacture');
    }


    public function save_manufacture()
    {
    	echo "test";
    }
}
