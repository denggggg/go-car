<?php

namespace App\Http\Controllers;
use App\Models\customerModel;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function customerRegistration()
    {
        return view('customer/customerRegistration');
    }

    public function addCustomer(Request $request)
    {
         $customer = new customerModel;
         $customer->custName =request('custname');
         $customer->custEmail =request('custemail') ;
         $customer->custPwd = request('custpwd');
         $customer->custPhoneNum = request('custphonenum');
         $customer->custAdress = request('custaddress');
         $customer->custPic = request('custpic');
         $customer->save();
         return redirect('/customer/homepage');
    }

    public function customerprofile($id)
    {
        $data = customerModel::find($id);
        return view ('customer/customerprofile')->with('data', $data);;
    }
    // public function Login()
    // {
    //     return view('customer/customerRegistration');
    // }
}


