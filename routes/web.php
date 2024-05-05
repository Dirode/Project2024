<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth', 'verified');

Route::get('/add_hall_view',[AdminController::class,'addview']);

Route::post('/upload_hall',[AdminController::class,'upload']);

Route::post('/booking',[HomeController::class,'booking']);

Route::get('/mybooking',[HomeController::class,'mybooking']);

Route::get('/cancel_book/{id}',[HomeController::class,'cancel_book']);

Route::get('/showhall',[AdminController::class,'showhall']);

Route::get('/deletehall/{id}',[AdminController::class,'deletehall']);

Route::get('/updatehall/{id}',[AdminController::class,'updatehall']);

Route::post('/edithall/{id}',[AdminController::class,'edithall']);

Route::get('/hall_details/{id}',[HomeController::class,'hall_details']);

Route::get('/aboutus',[HomeController::class,'aboutus']);

Route::get('/bookingshow',[AdminController::class,'bookingshow']);

Route::middleware([
    'auth:sanctum',
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/home');

    })->name('dashboard');
});

