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
        return view('booking/custAddBook');
    }

    // POST method
    // url /customer/booking
    public function addBookingByID(Request $request)
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
         $book->custDropLoc = request('dropoff-zip') . " " . request('dropoff');
         $book->bookStatus = "CREATED";
         $book->custID = 1;
         $book->driverID = 0;
         $book->save();
        
        //  DB::insert('insert into booking (custPickUpLoc, custDropLoc, bookStatus, custID, driverID) values (?, ?, ?, ?, ?)', [request('pickup-zip') . " " . request('pickup'), request('dropoff-zip') . " " . request('dropoff'), 'CREATED', '1', '0']);
        //  return view('booking/custViewDrivers');
        return redirect('/customer/booking/'.$book->id.'/drivers');
    }

    // GET method
    // url /customer/booking/{id}/drivers
    public function getDrivers($id)
    {
        return view('booking/custViewDrivers')->with('id',$id);
    }

    // POST method
    // url /customer/booking/{id}/drivers
    public function addDrivers(Request $request, $id)
    {
        bookingModel::where('id', $id)->update(['driverID'=> request('driverID')]);
        return redirect('/customer/booking/'.$id.'/confirm');
    }

    // GET method
    // url /customer/booking/{id}/driver/{driverID}
    public function getDriverByID($id)
    {
        return view('booking/custViewDriver')->with('id', $id);
    }

    // GET method
    // url /customer/booking/{id}/vehicle/{vehID}
    public function getVehicleByID($id)
    {
        return view('booking/custViewVehicle')->with('id', $id);
    }
    
    // GET method
    // url /customer/booking/{id}/confirm
    public function getBookingDetails($id)
    {
        $data = bookingModel::find($id);
        return view('booking/custConfirmBook')->with('data', $data);
    }

    // POST method
    // url /customer/booking/{id}/confirm
    public function confirmBookingByID($id)
    {
        bookingModel::where('id', $id)->update(['bookStatus'=> "CONFIRMED"]);
        return redirect('/customer/booking/'.$id.'/status');
    }

    // GET method
    // url /customer/booking/{id}/status
    public function getBookingStatus($id)
    {
        return view('booking/custViewBookStatus')->with('data', $data);
    }

    // GET method
    // url /driver/booking
    public function getDriverPendingBookingsByID() 
    {
        $data = bookingModel::where('driverID', 1)->where('bookStatus', "CREATED")->get();

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
        $data = bookingModel::where('driverID', 1)->where('id', $id)->get();
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
