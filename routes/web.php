<?php

use App\Constants\Enum;
use App\Http\Controllers\Admin\Appointment\AdminAppointmentController;
use App\Http\Controllers\Admin\Dashboard\IndexController as IndexAdminController;
use App\Http\Controllers\Admin\Doctor\AdminDoctorController;
use App\Http\Controllers\Admin\Patient\AdminPatientController;
use App\Http\Controllers\Doctor\Dashboard\DoctorAppointmentController;
use App\Http\Controllers\Doctor\Dashboard\IndexController as DoctorController;
use App\Http\Controllers\Patient\Dashboard\IndexController as PatientController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Patient\Dashboard\PatientAppointmentController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function (){
    return redirect()->route('login');
});

Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('custom-login', [LoginController::class, 'login'])->name('custom-login');
});
// Admin Routes
Route::middleware(['auth'])->group(function () {

    Route::group(['prefix' => 'auth'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'role:'.Enum::ADMIN],function () {

        Route::get('/dashboard', [IndexAdminController::class, 'index'])->name('admin.dashboard.index');



        Route::group(['prefix' => 'doctors'], function () {
            Route::get('/', [AdminDoctorController::class, 'index'])->name('admin.doctors.index');
            Route::get('/create/{id?}', [AdminDoctorController::class, 'create'])->name('admin.doctors.create');
            Route::post('/store/{id?}', [AdminDoctorController::class, 'store'])->name('admin.doctors.store');
            Route::post('{id}/delete', [AdminDoctorController::class, 'delete'])->name('admin.doctors.delete');
            Route::post('{id}/verified-by-admin', [AdminDoctorController::class, 'verifyByAdmin'])->name('admin.doctors.verified-by-admin');

        });

        Route::group(['prefix' => 'patients'], function () {
            Route::get('/', [AdminPatientController::class, 'index'])->name('admin.patients.index');
            Route::get('/create/{id?}', [AdminPatientController::class, 'create'])->name('admin.patients.create');
            Route::post('/store/{id?}', [AdminPatientController::class, 'store'])->name('admin.patients.store');
            Route::post('{id}/delete', [AdminPatientController::class, 'delete'])->name('admin.patients.delete');
            Route::post('{id}/verified-by-admin', [AdminPatientController::class, 'verifyByAdmin'])->name('admin.patients.verified-by-admin');

        });

        Route::group(['prefix' => 'appointments'],function () {
            Route::get('/', [AdminAppointmentController::class, 'index'])->name('admin.appointments.index');
            Route::get('/create/{id?}', [AdminAppointmentController::class, 'create'])->name('admin.appointments.create');
            Route::post('/store/{id?}', [AdminAppointmentController::class, 'store'])->name('admin.appointments.store');
            Route::post('/{id}/cancel', [AdminAppointmentController::class, 'cancel'])->name('admin.appointments.cancel');
            Route::post('/{id}/confirm', [AdminAppointmentController::class, 'confirm'])->name('admin.appointments.confirm');
        });
    });




    // Doctor Routes
    Route::group(['prefix' => 'doctor', 'middleware' => 'role:'.Enum::DOCTOR],function () {
        Route::get('/dashboard', [DoctorController::class, 'index'])->name('doctor.dashboard.index');
        Route::group(['prefix' => 'appointments'],function () {
            Route::get('/', [DoctorAppointmentController::class, 'index'])->name('doctor.appointments.index');
            Route::get('/create/{id?}', [DoctorAppointmentController::class, 'create'])->name('doctor.appointments.create');
            Route::post('/store/{id?}', [DoctorAppointmentController::class, 'store'])->name('doctor.appointments.store');
            Route::post('/{id}/cancel', [DoctorAppointmentController::class, 'cancel'])->name('doctor.appointments.cancel');
            Route::post('/{id}/confirm', [DoctorAppointmentController::class, 'confirm'])->name('doctor.appointments.confirm');
        });
    });


    // Patient Routes
    Route::group(['prefix' => 'patient', 'middleware' => 'role:'.Enum::PATIENT],function () {
        Route::get('/dashboard', [PatientController::class, 'index'])->name('patient.dashboard.index');
        Route::group(['prefix' => 'appointments'],function () {
            Route::get('/', [PatientAppointmentController::class, 'index'])->name('patient.appointments.index');
            Route::get('/create/{id?}', [PatientAppointmentController::class, 'create'])->name('patient.appointments.create');
            Route::post('/store/{id?}', [PatientAppointmentController::class, 'store'])->name('patient.appointments.store');
         });
    });

});





