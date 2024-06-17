<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('auth/login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Log::info('User logged in successfully.', ['email' => $credentials['email']]);

            return redirect()->intended('/');
        }

        // Log::warning('Failed login attempt.', ['email' => $credentials['email']]);

        return back();
    }
}
