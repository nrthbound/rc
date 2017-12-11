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
    return view('layout.main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/builds', 'BuildController@index');
Route::post('/build/save', 'BuildController@store');
Route::post('/build/{id}/delete', 'BuildController@delete');
