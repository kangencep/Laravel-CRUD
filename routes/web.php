<?php

use Illuminate\Support\Facades\Route;

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
  //  return view('welcome');
//});
Route::get('/user','UserController@read');
Route::post('insert','UserController@insert');

Route::get('/user/update/{id}','UserController@show_update');
Route::post('update','UserController@update');
Route::get('/user/delete/{id}','UserController@delete');