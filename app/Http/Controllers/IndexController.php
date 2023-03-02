<?php

namespace App\Http\Controllers;

use App\Models\Article;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article:: query()
                    ->where('is_publisher', '=', true)
                    ->orderByDesc('created_at')
                    ->limit(3)
                    ->get();
        
        return view('home', compact('articles'));
    }

    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
    public function post()
    {
        return view('post');
    }
    public function signin()
    {
        return view('signin');
    }
    public function signup()
    {
        return view('signup');
    }
}
