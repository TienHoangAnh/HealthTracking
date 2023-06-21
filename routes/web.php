<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\AuthenticationController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::resource('/people', PersonController::class)->middleware('auth');
Route::resource('/prescriptions', PrescriptionController::class)->middleware('auth');
Route::resource('/healths', HealthController::class)->middleware('auth');
Route::resource('/doctors', DoctorController::class)->middleware('auth');
Route::resource('/checks',CheckController::class)->middleware('auth');
Route::get('/login', AuthenticationController::class . '@loginIndex')->name('login');
Route::get('/register', AuthenticationController::class . '@registerIndex');
Route::post('/login', AuthenticationController::class . '@login');
Route::post('/register', AuthenticationController::class . '@register');
Route::get('/logout', AuthenticationController::class . '@logout');
