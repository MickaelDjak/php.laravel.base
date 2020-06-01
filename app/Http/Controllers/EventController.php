<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('events.index', ['events' => Event::paginate(5)]);
    }

    public function show($slag)
    {
        return view('events.page', ['event' => Event::where('slug', $slag)->first()]);
    }
}
