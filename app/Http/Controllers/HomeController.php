<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\flight;

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
    { $currentUser = app('Illuminate\Contracts\Auth\Guard')->user();
    
$flights=flight::all();
        return view('home',['currentUser'=>$currentUser,'flights'=>$flights]);
    }
}
