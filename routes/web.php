<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('Login');
// });


Route::get('/', [UserController::class, 'Signup'])->name('signup');
Route::post('/', [UserController::class, 'Signup'])->name('signup');
Route::get('auth/google', [UserController::class, 'redirectToGoogle'])->name('login');
Route::get('callback', [UserController::class, 'handleGoogleCallback'])->name('callback');
Route::get('dashboard', [HomeController::class, 'Dashboard'])->name('dashboard');
