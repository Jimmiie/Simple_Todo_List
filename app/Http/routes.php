<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'cobaController@index');
Route::get('home/tampil','cobaController@tampil');
Route::post('home/hapusall','cobaController@hapusall');
Route::resource('home','cobaController');

