<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {

//        dd(Event::with('tags')->first());
        return view('events.index', ['events' => Event::with('tags')->paginate(5)->onEachSide(2)]);
    }

    public function show($slag)
    {
        return view('events.page', ['event' => Event::where('slug', $slag)->first()]);
    }
}
