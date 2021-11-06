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

Route::get('/', 'ProductController@main');
Route::get('/add', 'ProductController@add')->name('add');
Route::get('/add/dvd', 'ProductController@add_dvd');
Route::get('/add/book', 'ProductController@add_book');
Route::get('/add/furniture', 'ProductController@add_furniture');
Route::get('/list', 'ProductController@list');
Route::post('/add/dvd','ProductController@save_dvd')->name('dvdsv');
Route::post('/add/book','ProductController@save_book')->name('booksv');
Route::post('/add/furniture','ProductController@save_furniture')->name('furnituresv');
});



