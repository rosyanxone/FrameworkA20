<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RentalController;
use App\Models\RentalPs;
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
    return view('home', [
        "rentalps" => RentalPs::all()
    ]);
})->middleware('auth');

Route::get('/register', function () {
    return view('register');
})->name("register");

Route::post('/action-register', 
        [AuthController::class, 'actionRegister']);
        
Route::get('/login', function () {
    return view('login');
})->name("login");

Route::post('/action-login', [AuthController::class, 'actionLogin']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/create', [RentalController::class, 'create'])->name('create')->middleware('auth');

Route::post('/store', [RentalController::class, 'store'])->name('store')->middleware('auth');

Route::get('/show/{id}', [RentalController::class, 'show'])->name('show')->middleware('auth');