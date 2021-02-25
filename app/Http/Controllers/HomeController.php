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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.index');
    }
    public function home(){
		return view('home');
	}
 
	public function elements(){
		return view('layouts.elements');
	}
 
	public function contact(){
		return view('layout.contact');
	}
<<<<<<< HEAD
}
=======
}
>>>>>>> 539053061f2b9ee5e47bd601303d6604392ee6e0
