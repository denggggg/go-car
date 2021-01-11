<?php

namespace App\Http\Controllers;
use App\Models\driverModel;
use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
      
         //Storage::disk('local')->put(request('picture'), $driver->encode('png','jpeg'));
         //Storage::putFile('picture', $request->file('picture'));
         //$image = $request->file('image'); $filename = time() . '.' . $image->getClientOriginalExtension();
         //Image::make($image)->resize(300, 300)->save( storage_path('/uploads/' . $filename ) );
         //Storage::put(request('picture'), $driver, 'public');
         $cover = $request->file('picture');
         $extension = $cover->getClientOriginalExtension();
         Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
            $driver->save();
        


         return redirect('/login');
    }

    public function viewDriver()
    {   
        return view('driver/driverHomepage');
    }

    public function viewDrivers()
    {
        session_start();
        //return $_SESSION['driver'][0]->id;
        $data = driverModel::find($_SESSION['driver'][0]->id);
        return view('driver/driverProfile')-> with ('data', $data);

    }

    public function updateDriver(Request $request)
    {
        
        $data = driverModel::find($request -> id);
        $data ->driverEmail = $request->email;
        $data ->driverPwd = $request->password;
        $data ->driverPhone = $request->phone;
        $data ->driverAdress = $request->address;
        $data ->driverLicense = $request->license;
        $data->driverPic = $request->picture;
        $data->save();
       


        return view('driver/driverProfile')-> with ('data', $data);
    }


    public function viewBookingLog()
    {
        return view('driver/driverBookingLog');
    }

    public function createDriverLoginForm(){
        return view('login-driver');
    }

    public function loginDriver(Request $request) {
        $driver = driverModel::where('driverEmail', '=', $request['driver-email'])->where('driverPwd', '=', $request['driver-password'])->get();

        if(!$driver->count()) {
            return "error";
        }

        session_start();
        $_SESSION['driver'] = $driver;
        return redirect('/driver/driverHomepage');

    }
   
}
