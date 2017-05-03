<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* ??
use App\Http\Requests;
use App\Http\Controllers\Controller;
*/
class WelcomeController extends Controller
{
    public function index() {
    	return view('welcome');
    }
    public function factures($param) {
    	return view('factures')->with('numero', $param);
    }
    public function articles($param) {
    	return view('articles')->withNumero($param);
    }
}
