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
Route::get('auth/activetion', 'Auth\ActivateController@active')->name('auth.active');
Route::post('auth/active', 'Auth\ActivateController@activeToken')->name('auth.activeted');
Route::get('/home', 'HomeController@index')->name('home');
