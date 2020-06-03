<?php

namespace App\Http\Controllers;

use App\Models\Preaching;

class PreachingController extends Controller
{
    public function index()
    {
        return view('preachings.index', ['preachings' => Preaching::paginate(5)->onEachSide(3)]);
    }

    public function show($slag)
    {
        return view('preachings.page', ['preaching' => Preaching::where('slug', $slag)->first()]);
    }
}
