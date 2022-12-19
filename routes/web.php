<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\RepairController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::apiResource('/home', App\Http\Controllers\Api\maintenanceController::class);

Route::resource('cars', CarController::class);

Route::resource('repairs', RepairController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
