<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Discussion;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Channel::all();
        $recent_discussions = Discussion::latest()->take(5)->get();
        return view('index', compact('channels', 'recent_discussions'));
    }
}
