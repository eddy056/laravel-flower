<?php

namespace laravel_project\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home(){
		return view('home');
	}

	public function about(){
		return view('about');
	}

	public function gallery(){
		return view('gallery');
	}

    public function contact(){
    	return view('contact');
    }

    public function login(){
    	return view('login');

    }

    public function register(){
    	return view('register');
    }
}
