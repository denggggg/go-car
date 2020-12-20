<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class driverController extends Controller
{
    public function addDriver()
    {
        return view('driverRegister/driverRegistration');
    }
    public function viewDriver()
    {
        return view('driver/driverProfile');
    }
    public function viewDrivers()
    {
        return view('driver/driverProfile');
    }
    public function updateDriver()
    {
        return view('driver/driverHomepage');
    }
    public function viewBookingLog()
    {
        return view('driver/driverBookingLog');
    }
}
