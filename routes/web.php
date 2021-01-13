<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\driverController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\vehicleController;

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

Route::get('/login', function () {
    return view('login-main');
});

Route::get('/register', function () {
    return view('register-main');
});

Route::post('/logout', function () {
    session_start();
    session_destroy();
    return redirect('/');
});

Route::get('/login/customer', [customerController::class, 'createCustomerLoginForm']); 
Route::post('/login/customer', [customerController::class, 'loginCustomer']); 
   

Route::get('/login/driver', function () {
    return view('login-driver');
});
route::get('/login/driver', [driverController::class, 'createDriverLoginForm']); 
Route::post('/login/driver', [driverController::class, 'loginDriver']); 
   

// <==================== Booking ==========================================>

Route::get('/customer/booking', [BookingController::class, 'createBookingForm']);
Route::post('/customer/booking', [BookingController::class, 'addBookingByID'])->name('booking.store');

Route::get('/customer/booking/drivers', [BookingController::class, 'getDrivers']);
Route::post('/customer/booking/drivers', [BookingController::class, 'addDrivers']);

Route::get('/customer/booking/driver/{driverID}', [BookingController::class, 'getDriverByID']);
Route::get('/customer/booking/vehicle/{vehID}', [BookingController::class, 'getVehicleByID']);

Route::get('/customer/booking/confirm', [BookingController::class, 'getBookingDetails']);
Route::post('/customer/booking/confirm', [BookingController::class, 'confirmBookingByID']);

Route::get('/customer/booking/status', [BookingController::class, 'getBookingStatus']);


Route::get('/driver/booking', [BookingController::class, 'getDriverPendingBookingsByID']);
Route::post('/driver/booking', [BookingController::class, 'driverUpdatePendingBooking']);

Route::get('/driver/booking/{id}', [BookingController::class, 'getDriverAssignedBookingsByID']);
Route::post('/driver/booking/{id}', [BookingController::class, 'driverUpdateAssignedBooking']);

// <==================== Vehicle ==========================================>

Route::get('vehicleMenu', [vehicleController::class, 'menuVehicle']);//@functionName

Route::get('vehicleAdd', [vehicleController::class, 'gotoAddVehicleForm']);

Route::get('vehicleEdit', [vehicleController::class, 'editVehicle']);

Route::get('vehicleMaintenance', [vehicleController::class, 'maintenanceVehicleSelect']);

Route::get('viewVehicle/{id}', [vehicleController::class, 'viewVehicle']);//...

Route::get('editForm/{id}', [vehicleController::class, 'editDataVehicleForm']);

Route::get('viewMaintenance/{id}', [vehicleController::class, 'viewMaintenance']);

Route::get('editFormMaintenance/{id}', [vehicleController::class, 'editFormMaintenance']);

Route::post('submit', [vehicleController::class, 'addVehicle']);//post from form to controller

Route::post('edit', 'App\Http\Controllers\vehicleController@updateDataVehicle');//save edited vehicle info

Route::post('saveEditMaintenance', 'App\Http\Controllers\vehicleController@saveEditMaintenance');//save edited maintenance

//Route::get('viewVehicle', 'App\Http\Controllers\vehicleController@viewVehicle' );//...

// <==================== Driver ==========================================>
Route::get('/driverRegister/driverRegistration', [driverController::class, 'createDriverForm']);
Route::post('/driverRegister/driverRegistration', [driverController::class, 'addDriver']);
Route::get('/driver/driverHomepage', [driverController::class, 'viewDriver']);
Route::get('/driver/driverProfile', [driverController::class, 'viewDrivers']);
Route::post('/driver/driverProfile/{id}', [driverController::class, 'updateDriver']);
Route::get('/driver/driverBookingLog', [driverController::class, 'viewBookingLog']);

// <==================== Customer ==========================================>
Route::get('customer/register', [customerController::class, 'customerRegistration']);
Route::post('customer/register', [customerController::class, 'addCustomer']);

Route::get('customer/profile/{id}', [customerController::class, 'customerprofile']);
// Route::get('/customerregistration', function () {
//     return view('customer/customerRegistration');
// });

Route::get('/customer/homepage', function () {
    return view('customer/customerhp');
});

// Route::get('/customerlogin', function () {
//     return view('customer/customerLogin');
// });

// Route::get('/customerbookinghistory', function () {
//     return view('customer/bookingHistory');
// });

// Route::get('/customerprofile', function () {
//     return view('customer/customerprofile');
// });