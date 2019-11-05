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

Route::middleware([])->group(function () {
    Route::resource('/simcard', 'v1\SimCardsController');
    Route::resource('/device', 'v1\DevicesController');
    Route::resource('/phonenumber', 'v1\PhoneNumbersController');
    Route::resource('/networkprovider', 'v1\NetworkProvidersController');
    Route::resource('/user', 'v1\UsersController');
});
