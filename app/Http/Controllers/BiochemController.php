<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiochemController extends Controller
{
    //
    function home() {
        return view('home');
    }
    function products() {
        return view('products');
    }
}
