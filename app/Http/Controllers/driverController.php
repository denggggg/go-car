<?php

namespace App\Http\Controllers;
use App\Models\driverModel;

use Illuminate\Http\Request;

class driverController extends Controller
{
    public function createDriverForm()
    {
        return view('driverRegister/driverRegistration');
    }
    public function addDriver(Request $request)
    {
         $driver = new driverModel;
         $driver->driverName =request('Fname');
         $driver->driverEmail =request('email') ;
         $driver->driverPwd = request('password');
         $driver->driverPhone = request('phone');
         $driver->driverAdress = request('address');
         $driver->driverLicense = request('license');
         $driver->driverPic = request('picture');
         $driver->save();
         return redirect('/driver/driverHomepage');
    }

    public function viewDriver()
    {
        return view('driver/driverHomepage');
    }

    public function viewDrivers($id)
    {
        $data = driverModel::find($id);
        return view('driver/driverProfile')-> with ('data', $data);
    }

    public function updateDriver()
    {
        return view('driver/driverProfile');
    }

    public function viewBookingLog()
    {
        return view('driver/driverBookingLog');
    }
}
