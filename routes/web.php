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
Route::get('/firmy', 'FirmyController@index');
Route::get('/firmy/{id}', 'FirmyController@show');
Route::post('/firmy', 'FirmyController@store');
Route::get('/firma/dodaj', 'FirmyController@create');

// 

Route::get('/kasy', 'KasyController@index');
Route::get('/kasy/{id}', 'KasyController@show')->name('kasy');
Route::get('/kasa/dodaj/{id_firma}', 'KasyController@create');
Route::post('/kasy', 'KasyController@store');

Route::post('/uslugi', 'UslugiController@store');
Route::get('/usluga/dodaj/{id_kasa}', 'UslugiController@create');
Route::get('/uslugi/fiskalizuj/{id_kasa}', 'UslugiController@fiskalizujform');
Route::post('/uslugi/fiskalizuj', 'UslugiController@fiskalizuj');

