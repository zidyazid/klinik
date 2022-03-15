<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function post_login(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        }

        return redirect('/login')->with('error', 'Email atau Password salah');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
