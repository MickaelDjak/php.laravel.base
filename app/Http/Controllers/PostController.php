<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Article::with('tags')->paginate(5)->onEachSide(2)]);
    }

    public function show($slag)
    {
        return view('posts.page', ['post' => Article::where('slug', $slag)->first()]);
    }
}
