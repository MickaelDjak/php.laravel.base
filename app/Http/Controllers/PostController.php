<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Post::with('tags')->paginate(5)->onEachSide(2)]);
    }

    public function show($slag)
    {
        return view('posts.page', ['post' => Post::where('slug', $slag)->first()]);
    }
}
