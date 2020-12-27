<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\driverController;

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

// <==================== Booking ==========================================>

Route::get('/customer/booking', [BookingController::class, 'createBookingForm']);
Route::post('/customer/booking', [BookingController::class, 'addBookingByID'])->name('booking.store');

Route::get('/customer/booking/{id}/drivers', [BookingController::class, 'getDrivers']);
Route::post('/customer/booking/{id}/drivers', [BookingController::class, 'addDrivers']);

Route::get('/customer/booking/{id}/driver/{driverID}', [BookingController::class, 'getDriverByID']);
Route::get('/customer/booking/{id}/vehicle/{vehID}', [BookingController::class, 'getVehicleByID']);

Route::get('/customer/booking/{id}/confirm', [BookingController::class, 'getBookingDetails']);
Route::post('/customer/booking/{id}/confirm', [BookingController::class, 'confirmBookingByID']);

Route::get('/customer/booking/{id}/status', [BookingController::class, 'getBookingStatus']);


Route::get('/driver/booking', [BookingController::class, 'getDriverPendingBookingsByID']);
Route::post('/driver/booking', [BookingController::class, 'driverUpdatePendingBooking']);

Route::get('/driver/booking/{id}', [BookingController::class, 'getDriverAssignedBookingsByID']);
Route::post('/driver/booking/{id}', [BookingController::class, 'driverUpdateAssignedBooking']);

// <==================== Vehicle ==========================================>

Route::get('vehiclemenu', 'App\Http\Controllers\vehicleController@menuveh' );

Route::get('vehicleadd', 'App\Http\Controllers\vehicleController@addveh' );

Route::get('vehicleedit', 'App\Http\Controllers\vehicleController@editveh' );

Route::get('vehicleMaintenance', 'App\Http\Controllers\vehicleController@mainteveh' );

Route::get('editform', 'App\Http\Controllers\vehicleController@editFormFunc' );

Route::get('updtMaintenance', 'App\Http\Controllers\vehicleController@updateMaintenance' );

// <==================== Driver ==========================================>
Route::get('/driverRegister/driverRegistration', [driverController::class, 'createDriverForm']);
Route::post('/driverRegister/driverRegistration', [driverController::class, 'addDriver']);
Route::get('/driver/driverHomepage', [driverController::class, 'viewDriver']);
Route::get('/driver/driverProfile', [driverController::class, 'viewDrivers']);
Route::post('/driver/driverProfile', [driverController::class, 'updateDriver']);
Route::get('/driver/driverBookingLog', [driverController::class, 'viewBookingLog']);

Route::get('/customerregistration', function () {
    return view('customer/customerRegistration');
});

Route::get('/customerhomepage', function () {
    return view('customer/customerhp');
});

Route::get('/customerlogin', function () {
    return view('customer/customerLogin');
});

Route::get('/customerbookinghistory', function () {
    return view('customer/bookingHistory');
});

Route::get('/customerprofile', function () {
    return view('customer/customerprofile');
});
