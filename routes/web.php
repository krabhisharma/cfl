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

Route::get('list', 'questionController@list');
Route::get('/app', function () {
    return view('show_quest');
});


Route::resource('/add','questionController');
Route::get('/add','questionController@create');

Route::get('/a','questionController@index');
// Route::get('/ad','questionController@request');

Route::get('/vi','questionController@i');