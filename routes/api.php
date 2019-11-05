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
    Route::resource('simcard', 'SimCardsController');
    Route::resource('device', 'DevicesController');
    Route::resource('phonenumber', 'PhoneNumbersController');
    Route::resource('networkprovider', 'NetworkProvidersController');
});
