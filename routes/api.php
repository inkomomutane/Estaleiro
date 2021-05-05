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
    Route::post('signup', 'Api\UserController@register');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
      Route::post('logout', 'Api\UserController@logout');
      Route::resource('cashier','Api\CashierController');
      Route::resource('cashInflowOutflow','Api\CashierController');
      Route::resource('category','Api\CategoryController');
      Route::Resource('inflowOutflowType','Api\InflowOutflowTypeController');
      Route::resource('invoice','Api\InvoiceController');
      Route::resource('material','Api\MaterialController');
      Route::resource('measure','Api\MeasureController');
      Route::resource('measuresOfmaterial','Api\MeasuresOfMaterialController');
      Route::resource('order','Api\OrderController');
      Route::resource('payment','Api\PaymentController');
      Route::resource('project','Api\ProjectController');
      Route::resource('role','Api\RoleController');
      Route::resource('status','Api\StatusController');
      Route::get('user', 'Api\UserController@user');
      Route::get('users', 'Api\UserController@users');
    });