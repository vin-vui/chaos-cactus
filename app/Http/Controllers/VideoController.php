<?php


// app/Http/Controllers/VideoController.php
namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
       
        return view('dashboard.videos.index', compact('videos'));
      
    }

    public function create()
    {
        return view('dashboard.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'youtube_link' => 'required|url',
        ]);

        Video::create($request->all());

        return redirect()->route('dashboard.videos.index')
                         ->with('success', 'Video added successfully.');
    }

    public function edit(Video $video)
    {
        return view('dashboard.videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'youtube_link' => 'required|url',
        ]);

        $video->update($request->all());

        return redirect()->route('dashboard.videos.index')
                         ->with('success', 'Video edited successfully.');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('dashboard.videos.index')
                         ->with('success', 'Video deleted.');
    }
}
