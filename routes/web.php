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
Route::group(['prefix' => 'cities'], function () {
    Route::get('/','CityController@index')->name('cities.index');
    Route::get('/create','CityController@create')->name('cities.create');
    Route::post('/create','CityController@store')->name('cities.create1');
    Route::get('/{id}/edit','CityController@viewEdit')->name('cities.viewEdit');
    Route::post('/{id}/edit','CityController@edit')->name('cities.edit');
    Route::get('/{id}/delete','CityController@delete')->name('cities.delete');
    Route::get('/createCus','CityController@createCus')->name('cities.createCus');
    Route::post('/createCus','CityController@createCustomer')->name('cities.createCustomer');
    Route::get('{id}/show','CityController@show')->name('cities.show');
    Route::get('{id}/showDelete','CityController@showDelete')->name('cities.showDelete');
});