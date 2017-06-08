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
Route::get('/test ','PrakerinController@index');
Route::get('/test1 ','PrakerinController@percobaan1');
Route::get('/test2 ','PrakerinController@percobaan2');
Route::get('/test3 ','PrakerinController@percobaan3');
Route::get('/test4 ','PrakerinController@percobaan4');
Route::get('/test6 ','PrakerinController@percobaan6');
Route::get('/test5 ','PrakerinController@percobaan5');
Route::get('halaman/{b} ','PrakerinController@param');
Route::get('{a} ','PrakerinController@parameter');







