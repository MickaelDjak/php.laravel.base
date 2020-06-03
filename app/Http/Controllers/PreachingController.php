<?php

namespace App\Http\Controllers;

use App\Models\Preaching;

class PreachingController extends Controller
{
    public function index()
    {
        return view('preachings.index', ['preachings' => Preaching::with('tags')->paginate(5)->onEachSide(2)]);
    }

    public function show($slag)
    {
        return view('preachings.page', ['preaching' => Preaching::where('slug', $slag)->first()]);
    }
}
