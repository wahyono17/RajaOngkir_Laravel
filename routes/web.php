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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'TrackingController@loadTracking');
Route::get('/city/{prov_id}', 'TrackingController@cityByProvince');
Route::get('/cost/{origin}/{dest}/{weight}/{curier}', 'TrackingController@cetakCost');