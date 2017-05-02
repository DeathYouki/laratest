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
    return response('Page '.$n, 200);//A real HTTP response
})->where('n','[1-3]');//Restriction on the variable value
/*Another way to write the HTTP response
Route::get('{n}', function ($n) {
    return Response::make('Page '.$n, 200);
})->where('n','[1-3]');*/
