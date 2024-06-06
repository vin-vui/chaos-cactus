<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('vue.home', ['title' => 'home']);
    }
    public function game()
    {
        return view('vue.game', ['title' => 'game']);
    }

    public function presse()
    {
        return view('vue.presse', ['title' => 'presse']);
    }

    public function contact()
    {
        return view('vue.contact', ['title' => 'contact']);
    }

    public function admin2()
    {
        return view('vue.admin2', ['title' => 'admin2']);
    }


}
