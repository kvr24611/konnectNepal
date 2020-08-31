<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function notifications(){
    	return view('admin.notifications');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function packages(){
    	return view('admin.packages');
    }

    public function subs()
    {
        return view('admin.subs');
    }

    public function offers(){
    	return view('admin.offers');
    }

}
