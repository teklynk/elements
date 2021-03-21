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

Auth::routes();

Route::resource('/', 'DashboardController');
Route::get('/', 'DashboardController@index');


Route::get('/fontpreview', 'BaseController@fontPreview');

Route::get('/preview/{id}', 'ChatController@chatPreview');


Route::resource('/chat', 'ChatController');
Route::get('/chat', 'ChatController@index');
Route::get('/chat/{id}/removebgimage', 'ChatController@removeBgImage');


Route::resource('/overlay', 'OverlayController');
Route::get('/overlay', 'OverlayController@index');


Route::resource('/soundboard', 'SoundboardController');
Route::get('/soundboard', 'SoundboardController@index');


Route::resource('/followers', 'FollowersController');
Route::get('/followers', 'FollowersController@index');


