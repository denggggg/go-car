<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bookingModel;
use DB;

class bookingController extends Controller
{
    // GET method
    // url /customer/booking
    public function createBookingForm()
    {
        session_start();
        if(count($_SESSION))
        {
            $customer = $_SESSION['customer'];
            return view('booking/custAddBook');
        }
        else {
            return redirect('/login');
        }
        
    }

    // POST method
    // url /customer/booking
    public function addBookingByID(Request $request)
    {
        session_start();
        $customer = $_SESSION['customer']; 
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
         $book->custDropLoc = request('dropoff-zip') . " " . request('dropoff');
         $book->bookStatus = "CREATED";
         $book->custID = $customer[0]->id;
         $book->driverID = 0;
         $book->save();

         $_SESSION['booking'] = $book; 
        return redirect('/customer/booking/drivers');
    }

    // GET method
    // url /customer/booking/{id}/drivers
    public function getDrivers()
    {
        return view('booking/custViewDrivers');
    }

    // POST method
    // url /customer/booking/{id}/drivers
    public function addDrivers(Request $request)
    {
        session_start();
        bookingModel::where('id', $_SESSION['booking']->id)->update(['driverID'=> request('driverID')]);
        return redirect('/customer/booking/confirm');
    }

    // GET method
    // url /customer/booking/{id}/driver/{driverID}
    public function getDriverByID()
    {
        return view('booking/custViewDriver');
    }

    // GET method
    // url /customer/booking/{id}/vehicle/{vehID}
    public function getVehicleByID()
    {
        return view('booking/custViewVehicle');
    }
    
    // GET method
    // url /customer/booking/confirm
    public function getBookingDetails()
    {
        session_start();
        $data = bookingModel::find($_SESSION['booking']->id);
        return view('booking/custConfirmBook')->with('data', $data);
    }

    // POST method
    // url /customer/booking/{id}/confirm
    public function confirmBookingByID()
    {
        session_start();
        bookingModel::where('id', $_SESSION['booking']->id)->update(['bookStatus'=> "CONFIRMED"]);
        return redirect('/customer/booking/status');
    }

    // GET method
    // url /customer/booking/{id}/status
    public function getBookingStatus()
    {
        session_start();
        $data = bookingModel::find($_SESSION['booking']->id);
        return view('booking/custViewBookStatus')->with('data', $data);
    }

    // GET method
    // url /driver/booking
    public function getDriverPendingBookingsByID() 
    {
        $data = bookingModel::where('driverID', 2)->where('bookStatus', "CONFIRMED")->get();

        return view('booking/driverViewBook')->with('data', $data);
    }

    // POST method
    // url /driver/booking
    public function driverUpdatePendingBooking(Request $request)
    {
        $id = $request['id'];
        if($request['accept']=="ACCEPT") {
            bookingModel::where('id', $id)->update(['bookStatus'=> "ACCEPTED"]);
        } else {
            bookingModel::where('id', $id)->update(['bookStatus'=> "REJECTED"]);
            return redirect('/driver/booking/');
        }

        return redirect('/driver/booking/'. $id);
    }

    // GET method
    // url /driver/booking/{id}
    public function getDriverAssignedBookingsByID($id) 
    {
        $data = bookingModel::where('driverID', 2)->where('id', $id)->get();
        return view('booking/driverUpdateBook')->with('data', $data);
    }

    // POST method
    // url /driver/booking/{id}
    public function driverUpdateAssignedBooking(Request $request) 
    {
        $id = $request['id'];

        if($request['pickup']=="PICK UP") {
            bookingModel::where('id', $id)->update(['bookStatus'=> "PICKED UP"]);
            return redirect('/driver/booking/'.$id);
        } 
        else if($request['deliver']=="DELIVERED") {
            bookingModel::where('id', $id)->update(['bookStatus'=> "DELIVERED"]);
            return redirect('/driver/booking/');
        }
        else {
            bookingModel::where('id', $id)->update(['bookStatus'=> "CANCELLED"]);
            return redirect('/driver/booking/');
        }
    }

}
