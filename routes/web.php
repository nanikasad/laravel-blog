<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/blog', 'blog');
    Route::get('/contact', 'contact');
    Route::get('/post', 'post');
});