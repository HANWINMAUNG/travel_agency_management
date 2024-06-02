<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create(Package $package) {
        return view('frontend.booking.index');
    }

    public function payment(Package $package) {
        return view('frontend.booking.payment');
    }
}
