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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('countries', 'CountryAPIController');

Route::resource('countries', 'CountryAPIController');

Route::resource('cities', 'CityAPIController');

Route::resource('areas', 'AreaAPIController');

Route::resource('addresses', 'AddressAPIController');

Route::resource('contact_infos', 'ContactInfoAPIController');

Route::resource('schools', 'SchoolAPIController');

Route::resource('schools', 'SchoolAPIController');

Route::resource('schools', 'SchoolAPIController');