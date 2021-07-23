<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'doctor_home'])->name('home');
Route::get('/admin_home', [App\Http\Controllers\HomeController::class, 'admin_home'])->name('admin_home');



Route::get('/admin',[App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('admin');
Route::get('/receptionist',[App\Http\Controllers\HomeController::class, 'receptionist'])->name('receptionist')->middleware('receptionist');
Route::get('/doctor',[App\Http\Controllers\HomeController::class, 'doctor'])->name('doctor')->middleware('doctor');


