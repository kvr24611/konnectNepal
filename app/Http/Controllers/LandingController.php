<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view('landing');
    }

    public function about(){
    	return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function offers(){
    	return view('offers');
    }

    public function services()
    {
        return view('services');
    }
}
