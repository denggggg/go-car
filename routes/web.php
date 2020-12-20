<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookingController;

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

Route::get('/customer/booking', [BookingController::class, 'addBookingByID']);

Route::get('/customer/drivers', [BookingController::class, 'getDrivers']);
Route::post('/customer/drivers', [BookingController::class, 'getDrivers']);

Route::get('/customer/driver/1', [BookingController::class, 'getDriverByID']);
Route::get('/customer/vehicle/1', [BookingController::class, 'getVehicleByID']);

Route::post('/customer/confirm', [BookingController::class, 'confirmBookingByID']);


Route::get('vehiclemenu', 'App\Http\Controllers\vehicleController@menuveh' );

Route::get('vehicleadd', 'App\Http\Controllers\vehicleController@addveh' );

Route::get('vehicleedit', 'App\Http\Controllers\vehicleController@editveh' );

Route::get('vehicleMaintenance', 'App\Http\Controllers\vehicleController@mainteveh' );

Route::get('editform', 'App\Http\Controllers\vehicleController@editFormFunc' );

Route::get('updtMaintenance', 'App\Http\Controllers\vehicleController@updateMaintenance' );