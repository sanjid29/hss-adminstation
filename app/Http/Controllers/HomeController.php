<?php

namespace App\Http\Controllers;

use Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard/dashboard');
    }

    public function pages($pageName)
    {
        return view('dashboard/includes/'.$pageName);
    }
}
