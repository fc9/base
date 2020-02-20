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

Route::group(['prefix' => 'locale', 'as' => 'locale'], function () {
    Route::get('/', 'LocalizationController@index');
    Route::get('/{locale}', 'LocalizationController@update')->name('.update');
});