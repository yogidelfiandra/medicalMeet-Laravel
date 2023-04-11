<?php

use Illuminate\Support\Facades\Route;

// Frontsite
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\DetailController;
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\PaymentController;
use App\Http\Controllers\Frontsite\RegisterController;

// Backsite
use App\Http\Controllers\Backsite\ConfigPaymentController;
use App\Http\Controllers\Backsite\ConsultationController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\DoctorController;
use App\Http\Controllers\Backsite\NurseController;
use App\Http\Controllers\Backsite\HospitalPatientController;
use App\Http\Controllers\Backsite\PermissionController;
use App\Http\Controllers\Backsite\ReportAppointmentController;
use App\Http\Controllers\Backsite\ReportTransactionController;
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\SpecialistController;
use App\Http\Controllers\Backsite\TypeUserController;
use App\Http\Controllers\Backsite\UserController;

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
	Route::resource('permission', PermissionController::class);
	Route::resource('role', RoleController::class);
	Route::resource('user', UserController::class);
	Route::resource('type_user', TypeUserController::class);
	Route::resource('specialist', SpecialistController::class);
	Route::resource('config_payment', ConfigPaymentController::class);
	Route::resource('consultation', ConsultationController::class);
	Route::resource('doctor', DoctorController::class);
	Route::resource('hospital_patient', HospitalPatientController::class);
	Route::resource('nurse', NurseController::class);
	Route::resource('appointment', ReportAppointmentController::class);
	Route::resource('transaction', ReportTransactionController::class);
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
