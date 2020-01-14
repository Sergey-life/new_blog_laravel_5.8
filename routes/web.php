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

Route::get('/', 'PagesController@index');

Route::get('/article/{id}', 'PagesController@article')->name('posts.article');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin-panel', 'PagesController@adminPanel')->name('posts.admin');

    Route::get('/posts/create', 'PagesController@create')->name('posts.create');

    Route::post('posts/store', 'PagesController@store')->name('posts.store');

    Route::get('posts/{id}/edit', 'PagesController@edit')->name('posts.edit');

    Route::put('posts/{id}/update', 'PagesController@update')->name('posts.update');

    Route::get('posts/{id}/show', 'PagesController@show')->name('posts.show');

    Route::delete('posts/{id}/destroy', 'PagesController@destroy')->name('posts.destroy');
});
