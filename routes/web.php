<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'HomeController@home')->name('home');

Route::get('/products', 'ProductController@products')->name('products');

Route::get('/news', 'NewController@news')->name('news');


Route::get('admin/prodotti', function () {
    return view('admin.prodotti');
})->name('admin.prodotti');

Route::get('prodotti/{id}', function ($id) {
    return view('prodotto', compact('id'));
})->name('prodotti.show');
