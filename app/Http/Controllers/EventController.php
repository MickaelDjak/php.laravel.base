<?php

namespace App\Http\Controllers;

use App\Models\Article;

class EventController extends Controller
{
    public function index()
    {
        return view('events.index', ['events' => Article::with('tags')->where('type', 'event')->paginate(5)->onEachSide(2)]);
    }

    public function show($slag)
    {
        return view('events.page', ['event' => Article::where('slug', $slag)->first()]);
    }
}
