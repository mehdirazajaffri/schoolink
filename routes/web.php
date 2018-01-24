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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('cITIES', 'CITYController');

Route::resource('cities', 'CityController');

Route::resource('cities', 'CityController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('cities', 'CityController');

Route::resource('cities', 'CityController');

Route::resource('cities', 'CityController');

Route::resource('cities', 'CityController');

Route::resource('countries', 'CountryController');

Route::resource('countries', 'CountryController');

Route::resource('cities', 'CityController');

Route::resource('areas', 'AreaController');

Route::resource('addresses', 'AddressController');

Route::resource('contactInfos', 'ContactInfoController');

Route::resource('schools', 'SchoolController');

Route::resource('schools', 'SchoolController');

Route::resource('schools', 'SchoolController');