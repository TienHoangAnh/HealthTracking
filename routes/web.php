<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PersonController;

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

Route::resource('/prescriptions', PrescriptionController::class);
Route::resource('/doctors',DoctorController::class);

Route::get('/login', AuthenticationController::class . '@loginIndex');
Route::get('/register', AuthenticationController::class . '@registerIndex');
Route::post('/login', AuthenticationController::class . '@login');
Route::post('/register', AuthenticationController::class . '@register');
Route::get('/logout', AuthenticationController::class . '@logout');
