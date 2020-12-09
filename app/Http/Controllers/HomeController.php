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
/*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }

    public function test()
    {
        return view('p');
    }

    public function demo()
    {
        return view('layouts.test');
    }



    public function apercu()
    {
        return view('web.body');
    }


    public function register()
    {
        return view('auth.register');
    }


    public function login()
    {
        return view('auth.login');
    }

    /*
    public function vue()
    {
        return view('zoo');
    }
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function terms()
    {
        return view('web.terms');
    }

    public function privacy()
    {
        return view('web.privacy');
    }

    */
}
