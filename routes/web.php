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
Route::get('/schools', 'HomeController@schools');
Route::get('/about_us', 'HomeController@aboutUs');
Route::get('/features', 'HomeController@features');
Route::get('/pricing', 'HomeController@pricing');
Route::get('/download', 'HomeController@download');
Route::get('/tutorials', 'HomeController@tutorials');
Route::get('/contact', 'HomeController@contact');
Route::get('/download_app', 'HomeController@contact');
Route::get('/schoolRegistration', 'HomeController@schoolRegistration');