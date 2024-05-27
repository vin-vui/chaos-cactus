<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('vue.home', ['title' => 'home']);
    }
}
