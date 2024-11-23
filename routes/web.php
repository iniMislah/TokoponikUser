<?php

use Illuminate\Support\Facades\Route;

Route::get('/homepage', function () {
    return view('homepage');



});


Route::get('/homepage/{id}', function ($id) {


    return view('productdetail',['id'=>$id]);



});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/blog/{id}', function ($id) {
    return view('detailblog',['id'=>$id]);
});



Route::get('/login', function () {
    return view('login');



});
Route::get('/product', function () {
    return view('product');



});

Route::get('/product/{id}', function ($id) {
    return view('productdetail',['id'=>$id]);



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
Route::get('/detailblog', function () {
    return view('detailblog');



});
Route::get('/productdetail', function () {
    return view('productdetail');



});
