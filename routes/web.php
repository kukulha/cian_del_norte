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
//AUTH
Auth::routes();
//WEB
Route::get('/', 'Web\PagesController@index')->name('home');
Route::get('/llantas', 'Web\PagesController@tires')->name('tires');
Route::get('/tipo-de-llanta/{slug}', 'Web\PagesController@types')->name('types');
Route::get('/maquinaria', 'Web\PagesController@machinery')->name('machinery');
Route::get('/articulos', 'Web\PagesController@posts')->name('blog');
Route::get('/articulos/{slug}', 'Web\PagesController@post')->name('post');
//ADMIN
Route::resource('posts', 'Admin\PostController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('tires', 'Admin\TireController');
Route::resource('machineries', 'Admin\MachineryController');
Route::resource('messages', 'Admin\MessageController');