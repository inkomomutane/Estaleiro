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
    Route::post('login', 'Api\UserController@login');
    Route::post('signup', 'Api\UserController@store');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
      Route::resource('cashier','Api\CashierController');
      Route::post('logout', 'Api\UserController@logout');
        //Route::get('user', 'Api\UserController@user');
    });