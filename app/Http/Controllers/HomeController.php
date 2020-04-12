<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function votingRoom()
    {
        return view('pages.voting_room');
    }

    public function history()
    {
        return view('pages.history');
    }

    public function scrumPlaning()
    {
        return view('pages.scrum_planing');
    }
}
