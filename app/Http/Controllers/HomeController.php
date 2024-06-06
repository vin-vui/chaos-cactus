<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screen;

class HomeController extends Controller
{
    public function index()
    {
        // Récupère toutes les captures d'écran de la base de données
        $screenshots = Screen::all();

        // Passe les captures d'écran et le titre à la vue
        return view('vue.home', ['screenshots' => $screenshots, 'title' => 'home']);
    }

    public function game()
    {
        return view('vue.game', ['title' => 'game']);
    }
    
    public function golfslinger()
    {
        return view('vue.golfslinger', ['title' => 'golfslinger']);
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
/*---------------------------------------------------------------------- */
/*-------------------BACKEND-------------------------------------------- */
/*---------------------------------------------------------------------- */
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
       
        $request->image->move(public_path('images'), $imageName);

        // Store $imageName path into database
        $screenshot = new Screen;
        $screenshot->image_path = $imageName;
        $screenshot->save();

        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('image',$imageName); 
    }
/*---------------------------------------------------------------------- */


    public function admin2()
    {
        return view('vue.admin2', ['title' => 'admin2']);
    }


}
