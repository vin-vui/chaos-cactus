<?php

namespace App\Http\Controllers;


use App\Models\Video; 
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::first();

    
       


      return view('welcome', compact('videos'));
      
    }

    
}
