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

// Admin
Route::get('admin', 'AdminController@index');


// Students
Route::get('program/create', ['as' => 'student.create', 'uses' => 'StudentsController@create']);
Route::post('program', ['as' => 'student.store', 'uses' => 'StudentsController@store']);

// Categories
Route::resource('categories', 'CategoryController', ['except' =>  ['create']]);
Route::resource('tags', 'TagController', ['except' =>  ['create']]);

// Comments
Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store' ]);
Route::get('comments/{post_id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit' ]);
Route::put('comments/{post_id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update' ]);
Route::delete('comments/{post_id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy' ]);
Route::get('comments/{post_id}', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete' ]);


Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');

Route::resource('test', 'TestController@index');