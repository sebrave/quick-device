<?php

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

Route::get('/', 'UsersController@index');
Route::get('/user/{user}', 'UsersController@show');

Route::get('/device', 'DevicesController@index');
Route::get('/device/{device}', 'DevicesController@show');

Route::get('/phonenumber', 'PhoneNumbersController@index');
Route::get('/phonenumber/{phonenumber}', 'PhoneNumbersController@show');

Route::get('/simcard', 'SimCardsController@index');
Route::get('/simcard/{simcard}', 'SimCardsController@show');
