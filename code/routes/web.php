<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;

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
    return redirect(route("login"));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*Admin Routes*/
Route::group(['prefix' => 'admin','middleware' => 'auth','is_admin'], function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/forms', [AdminController::class, 'forms'])->name('admin.forms');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

});
/*User Routes*/
Route::group(['prefix' => 'user','middleware' => 'auth'], function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/form/{id}', [UserController::class, 'form'])->name('user.form');
    Route::get('/all',      [UserController::class, 'show_all'])->name('all.user');
    Route::get('/{id}',      [UserController::class, 'specific_user'])->name('specific_user');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/logout', [LoginController::class, 'logout'])->name('user.logout');
});