<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function customerRegistration()
    {
        return view('customer/customerRegistration');
    }

    public function Login()
    {
        return view('customer/customerRegistration');
    }
}
