<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{
    public function addBookingByID()
    {
        return view('booking/custAddBook');
    }

    public function getDrivers()
    {
        return view('booking/custViewDrivers');
    }

    public function getDriverByID()
    {
        return view('booking/custViewDriver');
    }

    public function getVehicleByID()
    {
        return view('booking/custViewVehicle');
    }
    


}
