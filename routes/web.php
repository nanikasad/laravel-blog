<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/post', 'post');
    //Ссылки на страницы авторизации и регистрации
    Route::get('/signin', 'signin')->name('signin');
    Route::get('/signup', 'signup')->name('signup');
});

Route::controller(AuthController::class)->group(function () {
    // Обработчики форм
    Route::post('/signup', 'signup')->name('register');
    Route::post('/signin', 'signin')->name('login');

    // Выход из профиля
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(ArticleController::class)->prefix('/articles')->group(function() {
    Route::get('/', 'getArticles')->name('article.all');
    Route::get('/{article:slug}', 'show')->name('article.show');
});