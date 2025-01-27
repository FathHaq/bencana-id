<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\PoskoController;
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
Route::resource('/', HomeController::class);
Route::resource('/posko', PoskoController::class);
Route::resource('/logistic', LogisticController::class);
// Auth::routes();
// Route::resource('/', PoskoController::class);
// Route::get('/posko/create', view('posko.createposko'));

// Route::view('/posko/create', 'posko/createposko');
// Route::view('/logistik', 'logistik/logistik');
// Route::view('/logistik/create', 'logistik/createlogistik');
// Route::view('/login', '/login/login');

// Route::get('/home', [HomeController::class, 'index'])->name('home');

