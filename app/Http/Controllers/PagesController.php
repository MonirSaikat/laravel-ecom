<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('front.pages.home');
    }

    public function products()
    {
        return view('front.pages.products');
    }

    public function about()
    {
        return view('front.pages.about');
    }

    public function contact_us()
    {
        return view('front.pages.contact_us');
    }

    public function login()
    {
        return view('front.pages.login'); 
    }

    public function register()
    {
        return view('front.pages.register'); 
    }
}