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
Auth::routes();
Route::get('/', 'FirmyController@index');
Route::get('/firmy/{id}', 'FirmyController@show');
Route::post('/firmy', 'FirmyController@store');
Route::get('/firma/dodaj', 'FirmyController@create');

// 

Route::get('/kasy', 'KasyController@index');
Route::get('/kasa/dodaj/{id_firma}', 'KasyController@create');
Route::get('/home', 'HomeController@index')->name('home');
