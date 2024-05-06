<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Hall;

use App\Models\Booking;


class AdminController extends Controller
{
   public function addview()
   {
      if(Auth::id())
      {
         if(Auth::user()->usertype==1)

         {
            return view('admin.add_hall');
         }
         else
         {
            return redirect()->back();
         }
      }
      else
      {
         return redirect('login');
      }
   
   }

   public function upload(Request $request)
   {
        $hall=new hall;

        $image=$request->file;

        $imagename=time(). '.' .$image->getClientOriginalExtension();

        $request->file->move('hallimage', $imagename);

        $hall->image=$imagename;

        $hall->name=$request->name;

        $hall->capacity=$request->capacity;

        $hall->location=$request->location;

        $hall->description=$request->description;

        $hall->save();

        return redirect()->back()->with('message', 'Hall Added Successfully');

   }

   public function showhall()
   {
      if(Auth::id())
      {
         if(Auth::user()->usertype==1)
         {
            $data = hall::all();

            return view('admin.showhall', compact('data'));
         }
         else
         {
            return redirect()->back();
         }
      }
      else
      {
         return redirect('login');
      }
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

      $hall->capacity=$request->capacity;

      $hall->location=$request->location;

      $hall->description=$request->description;

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

   public function bookingshow()
   {
      $data=booking::all();
      
      return view('admin.bookingshow', compact('data'));
   }
  
}
