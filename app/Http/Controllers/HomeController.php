<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.welcome');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function package()
    {
        return view('frontend.packages.package');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function destination()
    {
        return view('frontend.destinations');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
