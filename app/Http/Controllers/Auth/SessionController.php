<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller {

    public function __construct() {
        $this->middleware('guest', ['except' => ['signout']]);
    }

    public function signin() {
        return view('auth.signin');
    }

    public function postSignin(Request $request) {

        $attempt = Auth::attempt([
                    'email' => $request->get('email'),
                    'password' => $request->get('password'),
                    'is_verified' => 1
        ]);

        if ($attempt)
            return redirect()->intended('/');

        return redirect()->back()->with('errorMessage', 'Invalid Credentials!!');
    }

    public function signout() {
        Auth::logout();

        return redirect('signin');
    }

}
