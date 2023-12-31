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

    public function homePage_with_background_video()
    {
        return view('pages.homePage-with-background-video');
    }

    public function homePage_with_background_parallax_effect()
    {
        return view('pages.homePage-with-parallax-effect');
    }

    public function button_variations()
    {
        return view('pages.button-variations');
    }

    public function shadow_hover_effect(){
        return view('pages.shadow-hover-effect');
    }

    public function border_hover_effect(){
        return view('pages.border-hover-effect');
    }

    public function loading_animation(){
        return view('pages.loading-animation');
    }
    public function alerts(){
        return view('pages.alerts');
    }
}
