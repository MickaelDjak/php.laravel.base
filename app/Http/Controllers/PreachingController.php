<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PreachingController extends Controller
{
    public function index()
    {
        $articles = Article::with('tags')
            ->where('type', 'preaching')
            ->paginate(5)
            ->onEachSide(2);

        return view('preachings.index', ['preachings' => $articles]);
    }

    public function show($slag)
    {
        return view('preachings.page', ['preaching' => Article::where('slug', $slag)->first()]);
    }
}
