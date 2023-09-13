<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function homeBackground()
    {
        return view('pages.home-background');
    }

    public function homeTwoColumn()
    {
        return view('pages.home-two-columns');
    }
}
