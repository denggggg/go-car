<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function customerBooking()
    {
        return view('booking/customer-booking');
    }

    public function show()
    {
        return view('booking/customer-booking');
    }
}
