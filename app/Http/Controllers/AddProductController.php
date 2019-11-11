<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function add_product()
    {
      return view('admin.add_product');
    }
    public function store(Request $request)
    {
      $this->validate($request, [
          'title' => 'required',
          'image' => 'nullable|image',
      ]);
        $image = new Image;
        $image->title = $request->title;
        if ($request->hasFile('image')) {
            //store
            $image->image = $request->image->store('public/images');
        }
        $image->save();
        return redirect()->route('create');
    }
}
