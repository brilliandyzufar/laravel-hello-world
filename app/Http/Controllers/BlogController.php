<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
		return view('index');
	}
 
	public function elements(){
		return view('elements');
	}
 
	public function contact(){
		return view('contact');
	}
}
?>