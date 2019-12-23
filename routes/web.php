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

Route::get('/productes', 'ProducteController@index')->name('productes.index');
Route::get('/productes/crear', 'ProducteController@create')->name('productes.create');
Route::get('/productes/{id}', 'ProducteController@edit')->where('id', '[0-9]+')->name('productes.edit');
Route::post('/productes', 'ProducteController@store')->name('productes.store');
Route::patch('/productes/{id}', 'ProducteController@update')->where('id', '[0-9]+')->name('productes.update');
Route::delete('/productes/{id}', 'ProducteController@destroy')->where('id', '[0-9]+')->name('productes.destroy');
