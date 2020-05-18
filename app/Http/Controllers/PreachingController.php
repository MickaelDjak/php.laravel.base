<?php

namespace App\Http\Controllers;

use App\Models\Preaching;
use Illuminate\Http\Request;

class PreachingController extends Controller
{
    public function index()
    {
        return view('preachings.index', ['preachings' => Preaching::all()]);
    }
}
