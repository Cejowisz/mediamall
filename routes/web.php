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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', ['as' =>'blog.single', 'uses' => 'BlogController@single'])->where('slug', '[\w\d\-\_]+');

Route::resource('posts', 'PostsController');
Auth::routes();


// Categories
Route::resource('categories', 'CategoryController', ['except' =>  ['create']]);
Route::resource('tags', 'TagController', ['except' =>  ['create']]);
