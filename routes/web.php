<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
})->name("dashboard");

Route::get('/list-product', function () {
    return view('pages.dashboard');
})->name("product");

Route::get('/add-product', function () {
    return view('pages.dashboard');
})->name("product.add");
