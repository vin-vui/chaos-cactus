<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrouselController extends Controller
{
    public function index()
    {
        // Supposons que tu aies un modèle Screenshot pour stocker les images
        $screenshots = \App\Models\Screenshot::all();
        return view('carrousel', compact('screenshots'));
    }
}