<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function index() {
        return view('Auth.login');
    }

    public function auth(Request $request) {
        //dd($request->all());
        $data = $request->validate([
            'phone' => 'required',
            'password' => 'required|between:8,20'
        ]);

        $credentials = $request->only('phone', 'password');
        $user = User::where('phone', $request->phone)->first();

        if (Auth::attempt($credentials)) {
            return redirect()->route('package');
        }

        return redirect()->route('frontend.auth.index')->with('error', "Your Credentials doesn't match");
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('frontend.auth.index')->with('success', 'Successfully Loggout');
    }
}
