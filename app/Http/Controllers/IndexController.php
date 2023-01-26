<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $users = [
            [
                "id" =>1,
                "username" => "ads"
            ],
            [
                "id" =>2,
                "username" => "qwe"
            ],
            [
                "id" =>1,
                "username" => "sad"
            ]
        ];
         $user = [
                "id" => 1,
                "username" => "Ranil"
        ];
        return view('index', compact('user', 'users'));
    }
}
