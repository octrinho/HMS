<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Receptionist;
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
    return view('auth.login');
});


Auth::routes();





Route::get('/admin',[App\Http\Controllers\HomeController::class, 'admin_home'])->name('admin');
Route::get('/receptionist',[App\Http\Controllers\HomeController::class, 'receptionist_home'])->name('receptionist');
Route::get('/doctor',[App\Http\Controllers\HomeController::class, 'doctor_home'])->name('doctor');


