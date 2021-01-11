<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicleModel;
use App\Models\maintenanceModel; //call vehicleModel

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
     public function saveMaintenance(Request $req){
        
        $data = new maintenanceModel;
        $data->vehicleLastServDate = $req->lastService;
        $data->vehicleMileage = $req->mileage;
        $data->vehicleNextServDate = $req->nextService;
        $data->save();
        return view('vehicle/vehicleMenu');

     }


    /*public function viewVehicle(){
        $data = vehicleModel::where('vehicleID', 1)->get();

        return view('vehicle/editForm')->with('data', $data);
    }*/

    public function viewMaintenance($id){

        $data = maintenanceModel::find($id);

        return view('vehicle/viewMaintenance')->with('data', $data);
    }

    public function editFormMaintenance($id){

        $data = maintenanceModel::find($id);
        return view('vehicle/updateMaintenance')->with('data', $data);
        
    }

    public function saveEditMaintenance(Request $req){

        $data=maintenanceModel::find($req->id);
        $data->vehicleLastServDate = $req->updateLastService;
        $data->vehicleMileage = $req->updateMileage;
        $data->vehicleNextServDate = $req->updateNextService;
        $data->save();
        return view('vehicle/viewMaintenance')->with('data', $data);
        
    }

    public function viewVehicle($id){

        $data = vehicleModel::find($id);

        return view('vehicle/viewVehicle')->with('data', $data);
    }

    function editData($id){
        $data = vehicleModel::find($id);
        return view('vehicle/editForm')->with('data', $data);
    }

    function updateData(Request $req){
        //return $req->input();//incomplete
        $data=vehicleModel::find($req->id);
        $data->driverID = 0;
        $data->vehicleModel = $req->modelEdit;
        $data->vehicleRegNo = $req->regEdit;
        $data->vehicleEngCC = $req->engEdit;
        $data->vehicleManYear = $req->manufacturingYear;
        $data->vehicleColour = $req->colorEdit;
        $data->vehicleRoadTax = $req->rtaxEdit;
        $data->save();
        return view('vehicle/viewVehicle')->with('data', $data);
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

    
}
