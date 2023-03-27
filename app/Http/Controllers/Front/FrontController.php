<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home ()
    {
        return view('frontend.home.home');
    }
    public function about ()
    {
        return view('frontend.about.about');
    }
    public function contact ()
    {
        return view('frontend.pages.contact');
    }
    public function faq ()
    {
        return view('frontend.pages.faq');
    }
    public function gallery ()
    {
        return view('frontend.pages.gallery');
    }
}
