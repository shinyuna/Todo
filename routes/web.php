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

Route::get('/', 'TasksController@index');

Auth::routes();

// Route::get('/task','TasksController@create');
Route::post('/task','TasksController@store');

Route::get('/task/{task}','TasksController@edit');
Route::put('/task/{task}','TasksController@update');

Route::delete('/task/{task}','TasksController@destroy');

// Route::get('/home', 'HomeController@index')->name('home');
