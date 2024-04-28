<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
})->name("dashboard");

Route::get('/products-list', function () {
    return view('pages.dashboard');
})->name("product");

Route::get('/add-products', function () {
    return view('pages.dashboard');
})->name("product.add");
