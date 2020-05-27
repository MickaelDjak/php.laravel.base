<?php

namespace App\Http\Controllers;

use App\Models\DailyBibleReadingFragment;
use App\Models\ChurchMeeting;
use App\Models\Event;
use App\Models\Post;
use App\Models\Preaching;
use Illuminate\Http\Request;

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
    public function index()
    {
        return view('pages.home', [
            'events' => Event::where('status', 1)->limit(3)->get(),
            'posts' => Post::where('status', 1)->limit(3)->get(),
            'preachings' => Preaching::where('status', 1)->limit(3)->get(),
            'meetings' => ChurchMeeting::getLast(),
        ]);
    }
}
