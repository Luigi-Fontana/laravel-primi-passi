<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function products() {
        $products = Product::all();
        return view('products', ['cards', $products]);
    }
}
