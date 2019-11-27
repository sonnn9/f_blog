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
Route::group(['prefix' => 'posts'], function () {
    Route::get('show', 'PostsController@getShow')->name('post.show');
    Route::get('edit/{id}', 'PostsController@getEdit')->name('post.edit')->middleware('CheckLevel');;
    Route::post('edit/{id}', 'PostsController@postEdit');
    Route::get('create', 'PostsController@getCreate')->name('post.create');
    Route::post('create', 'PostsController@postCreate');
    Route::get('delete/{id}', 'PostsController@getDelete')->name('post.delete');
}); 
Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'PostsController@changeLanguage')
        ->name('user.change-language');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
