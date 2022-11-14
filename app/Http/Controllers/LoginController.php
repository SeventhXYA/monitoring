<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.index');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // $user = Auth::user();
            // if ($user = Auth::user()) {
            //     if ($user->level == '1') {
            //         return redirect()->intended('/admin');
            //     } elseif ($user->level == '2') {
            //         return redirect()->intended('/home');
            //     }
            // }
            return redirect()->intended('/');
        }

        return back()->with(
            'loginError',
            'Maaf username atau password anda salah!'
        );
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended('/login');
    }
}
