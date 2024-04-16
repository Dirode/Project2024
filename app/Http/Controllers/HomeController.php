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

    public function booking(Request $request)
    {

         // Retrieve start and end time from the request
    $startTime = $request->start_time;
    $endTime = $request->end_time;
    $hallId = $request->hall;

    // Check for overlapping bookings
    $overlappingBookings = Booking::where('hall', $hallId)
        ->where(function ($query) use ($startTime, $endTime) {
            $query->whereBetween('start_time', [$startTime, $endTime])
                ->orWhereBetween('end_time', [$startTime, $endTime])
                ->orWhere(function ($query) use ($startTime, $endTime) {
                    $query->where('start_time', '<=', $startTime)
                        ->where('end_time', '>=', $endTime);
                });
        })
        ->exists();

    // If there are overlapping bookings, deny the request
    if ($overlappingBookings) {
        $status = 'Rejected';
    } else {
        $status = 'Booked';
    }

        $data = new booking;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->hall=$request->hall;

        $data->start_time=$request->start_time;

        $data->end_time=$request->end_time;

        $data->reason=$request->reason;

        $data->status = $status; // Set status based on availability

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

       $data->save();

       // Redirect back with appropriate message
    if ($status === 'Booked')
    {
        return redirect()->back()->with('message', 'Booking Request Successful.');
    } 
    else 
    {
        return redirect()->back()->with('message', 'The hall is already booked for this time slot.');
    }
  
} 
}
