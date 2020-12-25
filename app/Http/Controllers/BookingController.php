<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bookingModel;

class bookingController extends Controller
{
    // GET method
    // url /customer/booking
    public function createBookingForm()
    {
        return view('booking/custAddBook');
    }

    // POST method
    // url /customer/booking
    public function addBooking(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'pickup' => 'required',
            'pickup-zip' => 'required',
            'dropoff' => 'required',
            'dropoff-zip' => 'required',
         ]);

         //  Store data in database
         $book = new bookingModel;
         $book->custPickUpLoc = request('pickup-zip') . " " . request('pickup');
         $book->custDropLoc = request('dropoff-zip') . " " . request('dropoff-zip');
         $book->bookStatus = "CREATED";
         $book->custID = 1;
         $book->driverID = 0;
         $book->save();

         return view('booking/custViewDrivers');
    }

    // GET method
    // url /customer/drivers
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
    
    public function confirmBookingByID()
    {
        return view('booking/custConfirmBook');
    }

    public function getBookingByID()
    {
        return view('booking/custViewBookStatus');
    }

    public function getDriverPendingBookingsByID() 
    {
        return view('booking/driverViewBook');
    }

    public function getDriverAssignedBookingsByID() 
    {
        return view('booking/driverUpdateBook');
    }

}
