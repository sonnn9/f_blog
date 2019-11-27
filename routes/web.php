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

Route::get('/categories', 'CategoryController@index')->name('categories.index');;
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::post('/categories/create', 'CategoryController@store')->name('categories.store');
Route::get('/categories/edit/{id}', 'CategoryController@edit')->name('categories.edit');
Route::post('/categories/edit/{id}', 'CategoryController@update')->name('categories.update');
Route::get('/categories/delete/{id}', 'CategoryController@delete')->name('categories.delete');
