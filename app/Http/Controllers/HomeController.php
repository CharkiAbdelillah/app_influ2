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
        return view('home');
    }

    public function handleAdmin()
    {
        return view('admin.dashboard');
    }    
    public function handleManager()
    {
        return view('manager.dashboard');
    }
    public function handleUser(){
        return view('user.home');
    }
    public function handleUser2(){
        return view('user.home2');
    }
}