<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

  Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();
  });

 Route::get('/houses', 'Api\HouseController@index')->name('api.houses.index');
 Route::get('/houses/{house}', 'Api\HouseController@show')->name('api.houses.show');
 Route::get('/city', 'Api\HouseController@city')->name('api.houses.city');
 Route::get('/search', 'Api\HouseController@search')->name('api.houses.search');
 Route::resource('messages', 'Api\MessageController');


