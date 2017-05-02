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

Route::get('/', function () {
    return view('welcome');
});
Route::get('{n}', function ($n) {
    return 'Page '.$n;
})->where('n','[1-3]');//Restriction on the variable value

//A named route ??
Route::get('/h',[ 'as' => 'home', function () {
    return 'Page d\'une route nomée.';
}]);