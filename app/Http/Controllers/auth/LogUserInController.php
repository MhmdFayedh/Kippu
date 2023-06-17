<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LogUserInController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $loginRequest = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if( !auth()->attempt($loginRequest)){
            throw ValidationException::withMessages([
                'email' => 'Sorry Your email or password incorrect',
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'You have logged in successfully');
    }

    public function logout()
    {
        redirect('/login');
    }
}
