<?php

use App\Http\Controllers\PostController;
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
Route::group(['namespace'=>'App\Http\Controllers'], function(){

Route::get('/', 'JController@main');
Route::get('/add', 'JController@add');
Route::get('/list', 'JController@list');
Route::post('/add/save','JController@add_save');

});



