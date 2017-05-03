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

Route::get('facture/{param1}', function ($param1) {
    return view('facture')->withNumero($param1);
    /* Il faut souvent rediriger ??
    return redirect('facture');
    ou
    return redirect()->route('facture');
    */
});
Route::get('article/{param1}', function ($param1) {
    return view('article')->withNumero($param1);
});

