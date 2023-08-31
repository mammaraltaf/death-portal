<?php

use App\Http\Controllers\DynamicFormsStorageController;
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

Route::get('/test',function (){
    return view('builder');
})->name('test');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*Admin Routes*/
Route::group(['prefix' => 'admin','middleware' => 'auth','is_admin'], function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/forms', [AdminController::class, 'forms'])->name('admin.forms');
    Route::get('/forms/add', [AdminController::class, 'show'])->name('add.forms');
    //when we placed it outside middleware then it works perfectlly but when i placed in within middleware then it given error
    Route::post('/submit/form', [AdminController::class, 'storeForm']); 
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

});

/*User Routes*/
Route::group(['prefix' => 'user','middleware' => 'auth'], function () {

    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/form/{id}', [UserController::class, 'form'])->name('user.form');
    Route::get('/all',      [UserController::class, 'show_all'])->name('all.user');
    Route::get('/profile', [UserController::class, 'profile'])->name('user_profile');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});

// Route::post('/submit-form', [\App\Http\Controllers\BuilderController::class,'store'])->name('submit.dynamic.form');
Route::prefix('dynamic-forms')->name('dynamic-forms.')->group(function () {
    // Dummy route so we can use the route() helper to give formiojs the base path for this group
    Route::get('/',[\App\Http\Controllers\BuilderController::class,'create'])->name('index');
    
    Route::post('storage/s3', [DynamicFormsStorageController::class, 'storeS3'])
        ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

    Route::get('storage/s3', [DynamicFormsStorageController::class, 'showS3'])->name('S3-file-download');
    Route::get('storage/s3/{fileKey}', [DynamicFormsStorageController::class, 'showS3'])->name('S3-file-redirect');

    Route::post('storage/url', [DynamicFormsStorageController::class, 'storeURL'])
        ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

    Route::get('storage/url', [DynamicFormsStorageController::class, 'showURL'])->name('url-file-download');
    Route::delete('storage/url', [DynamicFormsStorageController::class, 'deleteURL']);
});
