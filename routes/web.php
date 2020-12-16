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

Route::get('gotomenu', function () {
    return view('vehicle/vehMenu');
});

Route::get('gotoadd', function () {
    return view('vehicle/vehAdd');
});

Route::get('gotoedit', function () {
    return view('vehicle/vehEdit');
});

Route::get('gotomainten', function () {
    return view('vehicle/vehMaintenance');
});

Route::get('gotoeditform', function () {
    return view('vehicle/editForm');
});

Route::get('gotoupdtmaintenanceform', function () {
    return view('vehicle/updtMainten');
});