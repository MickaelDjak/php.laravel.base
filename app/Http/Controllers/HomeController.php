<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ChurchMeeting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('pages.home', [
            'events' => Article::where('status', 1)->where('type', 'event')->limit(3)->get(),
            'posts' => Article::where('status', 1)->where('type', 'post')->limit(3)->get(),
            'preachings' => Article::where('status', 1)->where('type', 'preaching')->limit(3)->get(),
            'meetings' => ChurchMeeting::getLast(),
        ]);
    }
}
