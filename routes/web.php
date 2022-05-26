<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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


/* Login controller*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

/* Admin */

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
});

Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/main_admin', [App\Http\Controllers\AdminController::class, 'index'])->name('superAdmin');
});

/*Home Controller*/


Route::get('/detailListing', [HomeController::class, 'detailListing']);

Route::get('/payment', [HomeController::class, 'payment']);


/* CRUDS */

Route::resource('listing', ListingController::class);



