<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home() {
        return view('home');
    }

    public function prodotti() {
        return view('prodotti');
    }
}
