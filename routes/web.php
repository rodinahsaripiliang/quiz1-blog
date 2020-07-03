<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/category', 'CategoryController@index');
Route::post('/category/create',  'CategoryController@create');
Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::post('/category/{id}/update', 'CategoryController@update');
Route::get('/category/{id}/delete', 'CategoryController@delete');


Route::get('/post', 'PostController@index');
Route::post('/post/create',  'PostController@create');
Route::get('/post/{id}/edit', 'PostController@edit');
Route::post('/post/{id}/update', 'PostController@update');
Route::get('/post/{id}/delete', 'PostController@delete');

Route::get('/photo', 'PhotoController@index');
Route::post('/photo/create',  'PhotoController@create');
Route::get('/photo/{id}/edit', 'PhotoController@edit');
Route::post('/photo/{id}/update', 'PhotoController@update');
Route::get('/post/{id}/delete', 'PhotoController@delete');

Route::get('/album', 'AlbumController@index');
Route::post('/album/create',  'AlbumController@create');
Route::get('/album/{id}/edit', 'AlbumController@edit');
Route::post('/album/{id}/update', 'AlbumController@update');
Route::get('/album/{id}/delete', 'AlbumController@delete');