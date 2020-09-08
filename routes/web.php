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

Route::get('/newpost', 'demoController@get_new_post');
Route::post('/addpost','demoController@add_new_post');
Route::get('/{id}/delete','demoController@delete_post');
Route::get('/{id}/view','demoController@view_post');
Route::get('/', 'demoController@get_login');
Route::post('/saveEdit','democontroller@save_edit');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
