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

Auth::routes();

Route::get('/home', 'BookMarkController@index')->name('home');
Route::post('/bookmark','BookMarkController@store')->name('bookmark.store');
Route::delete('bookmark/{id}','BookMarkController@destroy');
