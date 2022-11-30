<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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




Route::get('/', [UserController::class, 'Login'])->name('login');
Route::post('/', [UserController::class, 'Login'])->name('login');
Route::get('/signup', [UserController::class, 'Signup'])->name('signup');
Route::post('/signup', [UserController::class, 'Signup'])->name('signup');


Route::get('auth/google', [UserController::class, 'redirectToGoogle'])->name('loginwithgoogle');


Route::get('callback', [UserController::class, 'handleGoogleCallback'])->name('callback');
Route::get('dashboard', [HomeController::class, 'Dashboard'])->name('dashboard');
Route::get('logout', [UserController::class, 'Logout'])->name('logout');


Route::get('/admin', [AdminController::class, 'Home'])->name('admin');
Route::get('/admin/users', [AdminController::class, 'Users'])->name('users');