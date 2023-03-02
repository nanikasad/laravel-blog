<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('home');
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
