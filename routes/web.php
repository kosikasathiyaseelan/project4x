<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ClinicDateController;
use App\Http\Controllers\ClinicVisitController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\InwardAdmissionSummaryController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\TreatmentDrugController;
use App\Http\Controllers\TestAppointmentController;
use App\Http\Controllers\ETTAppointmentController;
use App\Http\Controllers\CoronaryAngiogramAdmissionController;
use App\Http\Controllers\CardioThoracicClinicController;
use App\Http\Controllers\PermanentPaceMakerController;
use App\Http\Controllers\PaceMakerController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Route
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/contactus", [ContactController::class, 'index']);
Route::post("/contactus", [ContactController::class, 'store']);

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('patients', PatientController::class);
    Route::resource('clinic_dates', ClinicDateController::class);
    Route::resource('clinic_visits', ClinicVisitController::class);
    Route::resource('emergencies', EmergencyController::class);
    Route::resource('inward_admission_summaries', InwardAdmissionSummaryController::class);
    Route::resource('investigations', InvestigationController::class);
    Route::resource('treatment_drugs',TreatmentDrugController::class);
    Route::resource('test_appointments',TestAppointmentController::class);
    Route::resource('ett_appointments',ETTAppointmentController::class);
    Route::resource('coronary_angiogram_admissions',CoronaryAngiogramAdmissionController::class);
    Route::resource('cardio_thoracic_clinics',CardioThoracicClinicController::class);
    Route::resource('permanent_pace_makers',PermanentPaceMakerController::class);
    Route::resource('pace_makers',PaceMakerController::class);
    Route::resource('procedures',ProcedureController::class);

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/search', [UserController::class,'searchUser'])->name('users.search');

// all users
Route::get('/send/mail/view/all', [UserController::class, 'emailViewAll'])->name('send.email.view.all');

Route::post('/store/email/all', [UserController::class, 'storeAllUserEmail'])->name('store.alluser.email');


// single users
Route::get('/send/mail/view/{id}', [UserController::class, 'emailView'])->name('send.email.view');

Route::post('/store/email/{id}', [UserController::class, 'storeSingleEmail'])->name('store.user.email');


});


Route::group(['prefix' => 'doctor', 'middleware' => ['isDoctor', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [DoctorController::class, 'index'])->name('doctor.dashboard');
});
