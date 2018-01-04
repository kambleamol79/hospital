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
    return view('frontend/home');
});

Auth::routes();

Route::get('/patient', 'HomeController@patient')->name('patient');
Route::get('/doctor', 'HomeController@doctor')->name('doctor');
Route::get('/services', 'ServiceController@index')->name('service');
Route::get('/services/mobile_diagnosticks', 'ServiceController@mobile_diagnosticks')->name('mobile_diagnosticks');
