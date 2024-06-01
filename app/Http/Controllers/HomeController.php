<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->get();
        $citys = City::latest()->get();
        return view('frontend.welcome',['packages' => $packages , 'citys' => $citys]);
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
