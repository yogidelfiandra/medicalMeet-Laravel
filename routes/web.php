<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\DetailController;
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\PaymentController;

use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Frontsite\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', LandingController::class);
Route::resource('detail-doctor', DetailController::class);


// Frontsite
Route::group(['middleware' => [
	'auth:sanctum', config('jetstream.auth_session'), 'verified'
]], function () {

	// appointment page
	Route::resource('appointment', AppointmentController::class);

	// payment page
	Route::controller(PaymentController::class)->group(function () {
		Route::get('payment/success', 'success')->name('payment.success');
	});
	Route::resource('payment', PaymentController::class);


	Route::resource('register_success', RegisterController::class);
});


// Backsite
Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => [
	'auth:sanctum', config('jetstream.auth_session'), 'verified'
]], function () {

	Route::resource('dashboard', DashboardController::class);


	// return view('dashboard');
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
// 	'auth:sanctum',
// 	config('jetstream.auth_session'),
// 	'verified'
// ])->group(function () {
// 	Route::get('/dashboard', function () {
// 		return view('dashboard');
// 	})->name('dashboard');
// });
