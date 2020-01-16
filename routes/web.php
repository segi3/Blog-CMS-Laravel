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

// page routes
Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');

// blog routes
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'] )->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex']);

// post routes
Route::resource('posts', 'PostController');

// category routes
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

// tag routes
Route::resource('tags', 'TagController', ['except' => ['create']]);

// auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
