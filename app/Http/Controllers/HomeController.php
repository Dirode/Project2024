<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Hall;

use App\Models\Booking;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $hall=hall::all();

                return view('user.home', compact('hall'));
            }
            else
            {
                return view('admin.home');
            }
        }

        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else
        {
        $hall = hall::all();

       return view('welcome', compact('hall'));
        }
    }

  

       
   

} 

