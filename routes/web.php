<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/service', function () {
    return view('frontend.service');
});
Route::get('/client', function () {
    return view('frontend.client');
});
Route::get('/product', function () {
    return view('frontend.product');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/article', function () {
    return view('frontend.article');
});
Route::get('/future-plan', function () {
    return view('frontend.future');
});