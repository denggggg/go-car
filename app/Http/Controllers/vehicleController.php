<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vehicleController extends Controller
{
    public function menuveh(){
        return view('vehicle/vehMenu');
    }

    public function addveh(){
        return view('vehicle/vehAdd');
    }

    public function editveh(){
        return view('vehicle/vehEdit');
    }

    public function mainteveh(){
        return view('vehicle/vehMaintenance');
    }

    public function editFormFunc(){
        return view('vehicle/editForm');
    }

    public function updateMaintenance(){
        return view('vehicle/updtMainten');
    }
}
