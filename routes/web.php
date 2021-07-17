<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelajaranController;

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

// auth controller
Route::post('/auth/save', [AdminController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [AdminController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AdminController::class, 'logout'])->name('auth.logout');

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login', [AdminController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [AdminController::class, 'register'])->name('auth.register');
    // admin controller
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    // pelajaran
    Route::resource('pelajaran', PelajaranController::class);
});