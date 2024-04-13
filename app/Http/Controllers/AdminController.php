<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hall;

class AdminController extends Controller
{
   public function addview()
   {
    return view('admin.add_hall');
   }

   public function upload(Request $request)
   {
        $hall=new hall;

        $image=$request->file;

        $imagename=time(). '.' .$image->getClientOriginalExtension();

        $request->file->move('hallimage', $imagename);

        $hall->image=$imagename;

        $hall->name=$request->name;

        $hall->save();

        return redirect()->back()->with('message', 'Hall Added Successfully');

   }
}
