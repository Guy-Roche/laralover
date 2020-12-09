<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    //

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
}
