<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/create/customer',"ApiController@create_customer");
Route::post('/create/order',"ApiController@create_order");

Route::get('/get/customers',"ApiController@get_customers");
Route::get('/get/orders',"ApiController@get_orders");

Route::delete('/delete/order/{id}',"ApiController@delete_order");

Route::post('/login',"ApiController@login");
//
