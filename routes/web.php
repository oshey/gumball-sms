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

Route::get('/home', 'HomeController@index')->name('home');

// Teachers
//Route::get('/teachers', 'TeachersController@index')->name('teachers.index');
Route::get('/teachers/{teacher}', 'TeachersController@show')->name('teachers.show');
Route::get('/me/edit', 'TeachersController@edit')->name('teachers.edit');
Route::put('/me', 'TeachersController@update')->name('teachers.update');