<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'AdminController@dashboard')->name('dashboard');
        Route::resource('houses', 'HouseController');
        Route::resource('messages', 'MessaggiRicevutiController');
    });

     Route::get("{any?}", function () {
        return view('guests.home');
     })->where("any", ".*")->name('home');
