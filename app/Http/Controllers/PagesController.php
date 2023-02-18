<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('front.pages.home');
    }

    public function products()
    {
        $products = Product::paginate(5);
        return view('front.pages.products', compact('products'));
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