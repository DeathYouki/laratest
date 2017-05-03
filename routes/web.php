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

Route::get('v1/{param1}', function ($param1) {
    return view('view1')->with('numero', $param1);//numero is the name of the parametre to be used in the view
    /* Autre methode de faire la meme chose
    return view('article')->withNumero($n);
    //Soit passer un array 
    return view('article', ['numero' => $n]);
    */
});

