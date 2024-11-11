<?php

use Illuminate\Support\Facades\Route;

Route::get('/homepage', function () {
    return view('homepage');



});

Route::get('/blog', function () {
    return view('blog');



});
Route::get('/product', function () {
    return view('product');



});

Route::get('/login', function () {
    return view('login');



});
Route::get('/checkout', function () {
    return view('checkout');



});

Route::get('/register', function () {
    return view('register');



});

Route::get('/myaccount', function () {
    return view('myaccount');



});
Route::get('/cart', function () {
    return view('cart');



});
Route::get('/wishlist', function () {
    return view('wishlist');



});