<?php

namespace App\Http\Controllers;

use App\Models\ChurchMeeting;

class CalendarController extends Controller
{
    public function index()
    {
        return view('pages.calendar', ['meetings' => ChurchMeeting::getLast()]);
    }
}
