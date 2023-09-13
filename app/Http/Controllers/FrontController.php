<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function home_background_image()
    {
        return view('pages.home-background-image');
    }

    public function home_two_column()
    {
        return view('pages.home-two-columns');
    }
}
