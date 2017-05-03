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

Route::get('/', 'WelcomeController@index');
Route::get('factures/{param}', 'WelcomeController@factures')->where('param', '[0-9]+');
Route::get('articles/{param}', 'WelcomeController@articles')->where('param', '[0-9]');



