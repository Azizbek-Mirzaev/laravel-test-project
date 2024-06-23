<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/',[HomeController::class, 'index']);

// Route::get('/admin/hellow',[HomeController::class, 'index']);

Route::get('admin',[MainController::class, 'index'])->name('admin')
->middleware('auth');

Route::get('login',[LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('login',[LoginController::class, 'login'])->name('login');


Route::get('register',[RegisterController::class, 'showRegistreForm'])->name('ShowRegistreForm');
Route::post('register',[RegisterController::class, 'register'])->name('registreUser');

