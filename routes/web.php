<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
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
// Route::group(
//     [
//         'prefix' => 'admin',
//         'as' => 'admin.',
//         'middleware' =>'auth'
//     ],
//     function ()
//     {
//         Route::get('', [MainController::class, 'index'])->name('admin');
//         Route::group(
//             [
//                 'prefix' => 'user',
//                 'as' => 'user.'
//             ],
//             function()
//             {
//                 Route::get('', [UserController::class, 'index'])->name('index');
//                 Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
//                 Route::post('update/{id}', [UserController::class, 'update'])->name('update');
//                 Route::get('show/{id}', [UserController::class, 'show'])->name('show');
//                 Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete');
//             });
//         Route::group(
//             [
//                 'prefix' => 'category',
//                 'as' => 'category.'
//             ],function()
//             {
//                 Route::get('',[CategoryController::class]);
//             }
//             );
//     });

Route::get('admin', [MainController::class, 'index'])
->name('admin')->middleware('auth');

Route::get('admin/user', [UserController::class, 'index'])
->name('admin.user.index')->middleware('auth');

Route::get('admin/user/{id}', [UserController::class, 'edit'])
->whereNumber('id')

->name('admin.user.edit')->middleware('auth');
Route::post('admin/user/update/{id}', [UserController::class, 'update'])
->name('admin.user.update')->middleware('auth');
Route::get('admin/user/show/{id}', [UserController::class, 'show'])
->name('admin.user.show')->middleware('auth');
Route::get('admin/user/delete/{id}', [UserController::class, 'delete'])
->name('admin.user.delete')->middleware('auth');

Route::get('admin/user/about',[UserController::class,'about'])
->name('admin.user.about')
->middleware('auth');

Route::get('admin/category', [CategoryController::class, 'index'])
->middleware('auth')->name('admin.category.index');
Route::get('admin/category/create', [CategoryController::class, 'create'])
->middleware('auth')->name('admin.category.create');
Route::post('admin/category/store', [CategoryController::class, 'store'])
->middleware('auth')->name('admin.category.store');


Route::get('login', [LoginController::class, 'showLoginForm'])
->name('showLoginForm')->middleware('guest');
Route::post('login', [LoginController::class, 'login'])
->name('login')->middleware('guest');
Route::get('logout', [LoginController::class, 'logout'])
->name('logout')->middleware('auth');

Route::get('register', [RegisterController::class, 'showRegistreForm'])
->name('ShowRegistreForm')->middleware('guest');
Route::post('register', [RegisterController::class, 'register'])
->name('registreUser')->middleware('guest');
