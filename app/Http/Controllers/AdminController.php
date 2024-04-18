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

   public function showhall()
   {

      $data = hall::all();

      return view('admin.showhall', compact('data'));
   }

   public function deletehall($id)
   {
      $data=hall::find($id);

      $data->delete();

      return redirect()->back();
   }

   public function updatehall($id)
   {
      $data = hall::find($id);

      return view('admin.update_hall', compact('data'));
   }

   public function edithall(Request $request , $id)
   {
      $hall = hall::find($id);

      $hall->name=$request->name;

      $image=$request->file;

      if($image)
      {

      $imagename=time().'.'.$image->getClientOriginalExtension();

      $request->file->move('hallimage', $imagename);

      $hall->image=$imagename;
      
      }

      $hall->save();

      return redirect()->back()->with('message', 'Hall Updated Successfully');

   }
}
