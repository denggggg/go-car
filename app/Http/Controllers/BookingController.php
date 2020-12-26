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
        $data = bookingModel::find($id);
        return view('booking/custViewBookStatus')->with('data', $data);
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
