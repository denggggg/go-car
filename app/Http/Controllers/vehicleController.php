<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicleModel; //call vehicleModel

class vehicleController extends Controller
{
    public function menuVehicle(){
        return view('vehicle/vehicleMenu');
    }

    public function gotoaddvehicle(){
        return view('vehicle/vehicleAdd');
    }

    public function addVehicle(Request $req){

        // print_r($var->input());//this is to display what is actually csrf

        $var = new vehicleModel;
        $var->driverID = 0;
        $var->vehicleModel = $req->brand;
        $var->vehicleRegNo = $req->plateNum;
        $var->vehicleEngCC = $req->engineCC;
        $var->vehicleManYear = $req->manufacturingYear;
        $var->vehicleColour = $req->colour;
        $var->vehicleRoadTax = $req->roadtax;
        $var->save();

        
        

        return view('vehicle/vehicleMenu');

    }
    public function viewVehicle(){
        $data = vehicleModel::where('vehicleID', 1)->get();

        return view('vehicle/editForm')->with('data', $data);
    }

    public function editVehicle(){
        return view('vehicle/vehicleEdit');//vehicle/namapageblade
    }

    public function maintenanceVehicle(){
        return view('vehicle/vehicleMaintenance');
    }

    public function editFormFunc(){
        return view('vehicle/editForm');
    }

    public function updateMaintenance(){
        return view('vehicle/updateMaintenance');
    }
}
