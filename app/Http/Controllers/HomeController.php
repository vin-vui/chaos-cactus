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

    public function admin()
    {
        return view('vue.adminlogin', ['title' => 'adminlogin']);
    }

    public function adminmainedit()
    {
        return view('vue.adminmainedit', ['title' => 'adminmainedit']);
    }

    public function adminmanager()
    {
        return view('vue.adminmanager', ['title' => 'adminmanager']);
    }

    public function admingamelist()
    {
        return view('vue.admingamelist', ['title' => 'admingamelist']);
    }
}
