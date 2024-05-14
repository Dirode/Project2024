<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Hall;
           
use App\Models\Booking;

use Illuminate\Support\Facades\Mail;

use App\Mail\BookingRequestSuccessfulMail;

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
   // Retrieve start and end time from the request
$startTime = $request->start_time;
$endTime = $request->end_time;
$hallId = $request->hall;
$date = $request->date;

  $request->validate([
        'hall_id' => 'required|exists:halls,id',
  ]);
 
// Convert start and end time to 12-hour format with AM and PM
$startTime12 = date('h:i A', strtotime($startTime));
$endTime12 = date('h:i A', strtotime($endTime));

// Check for overlapping bookings
$overlappingBookings = Booking::where('hall_id', $hallId)
        ->whereDate('date', $date)
        ->where(function ($query) use ($startTime12, $endTime12) {
            $query->whereBetween('start_time', [$startTime12, $endTime12])
                ->orWhereBetween('end_time', [$startTime12, $endTime12])
                ->orWhere(function ($query) use ($startTime12, $endTime12) {
                    $query->where('start_time', '<=', $startTime12)
                        ->where('end_time', '>=', $endTime12);
                });
        })
        ->exists();

// If there are overlapping bookings, deny the request
if ($overlappingBookings) {
 return redirect()->back()->with('message', 'The hall is already booked for this time slot.');
} else {
$status = 'Booked';

   
}
        $booking = Booking::with('hall')->get();

        
        $data = new booking;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->hall_id=$request->hall_id;

        $data->start_time=$request->start_time;

        $data->end_time=$request->end_time;

        $data->reason=$request->reason;

        $data->status = $status; // Set status based on availability

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

       $data->save();

       $booking = Booking::latest('id')->first(); //get the latest booking

       // Redirect back with appropriate message
    if ($status === 'Booked')
    {
        $user=User::find($data->user_id);
        // Send email to user
        Mail::to($data->email)->send(new BookingRequestSuccessfulMail($user, $booking));

        return redirect()->back()->with('message', 'Booking Request Successful.');
    } 
      
} 

    public function mybooking()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==0)

            {
                $userid=Auth::user()->id;

             
                $book=booking::where('user_id',$userid)
                                ->orderBy('date', 'asc')
                                ->orderBy('start_time', 'asc')
                                ->orderBy('end_time', 'asc')
                                ->get();

                return view('user.my_booking', compact('book'));
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

    public function cancel_book($id)
    {
        $data=booking::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function aboutus()
    {
        return view('user.aboutus');
    }

    public function hall_details($id)
    {
        $hall=hall::find($id);

        $bookings = booking::where('hall_id', $id)->get();

        return view('user.hall_details', compact('hall', 'bookings'));
    }   
    


}
