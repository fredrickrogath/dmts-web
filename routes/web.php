<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->middleware('guest');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::group(['prefix' => 'super_admin', 'middleware' => 'is_super_admin', 'as' => 'admin.super.'], function () {
        // Dashboard for super admini
        Route::get('/dashboard', [\App\Http\Controllers\SuperAdmin\TaskController::class, 'index'])->name('dashboard');
        Route::get('/searchHospitalAdministrators', [\App\Http\Controllers\SuperAdmin\TaskController::class, 'searchHospitalAdministrators'])->name('searchHospitalAdministrators');
    });

    Route::group(['prefix' => 'hospital_admin', 'middleware' => 'is_hospital_admin', 'as' => 'admin.hospital.'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\HospitalAdmin\TaskController::class, 'index'])->name('dashboard');
    });

    Route::group(['prefix' => 'doctor', 'middleware' => 'is_doctor', 'as' => 'doctor.'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\Doctor\TaskController::class, 'index'])->name('dashboard');
        Route::get('/management', [\App\Http\Controllers\Doctor\TaskController::class, 'index'])->name('management');
    });

    Route::group(['prefix' => 'patient', 'middleware' => 'is_patient', 'as' => 'patient.'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\Doctor\DashboardController::class, 'index'])->name('dashboard');
    });

    Route::get('/dashboard', function () {

        if (auth()->user()->role == \App\Models\User::is_super_admin) {
            return redirect()->route('admin.super.dashboard');
        } elseif (auth()->user()->role == \App\Models\User::is_hospital_admin) {
            return redirect()->route('admin.hospital.dashboard');
        } elseif (auth()->user()->role == \App\Models\User::is_a_doctor) {
            return redirect()->route('doctor.dashboard');
        } elseif (auth()->user()->role == \App\Models\User::is_a_patient) {
            return redirect()->route('patient.dashboard');

        } else {
            return redirect()->back();
        }

    })->name('dashboard');

    Route::get('/management', function () {
        return Inertia::render('Management');
    })->name('management');

    Route::get('/test', function () {
        return json_encode(\App\Models\User::latest()->get());
    });
});
