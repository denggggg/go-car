<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main-page');
});

Route::get('/customer/booking', [BookingController::class, 'customerBooking']);
Route::post('/customer/booking', [BookingController::class, 'show']);



Route::get('vehiclemenu', 'App\Http\Controllers\vehicleController@menuveh' );

Route::get('vehicleadd', 'App\Http\Controllers\vehicleController@addveh' );

Route::get('vehicleedit', 'App\Http\Controllers\vehicleController@editveh' );

Route::get('vehicleMaintenance', 'App\Http\Controllers\vehicleController@mainteveh' );

Route::get('editform', 'App\Http\Controllers\vehicleController@editFormFunc' );

Route::get('updtMaintenance', 'App\Http\Controllers\vehicleController@updateMaintenance' );