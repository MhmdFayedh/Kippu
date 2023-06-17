<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate the register Rquest

        $registerRequest =  request()->validate([
            'name' => ['required' , 'min:3', 'max:255'] ,
            'email' => ['required' , 'email','min:3', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed',
            Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ]
        ]);

        // Store (Create) and login 
        $user = User::create($registerRequest);
        auth()->login($user);

        // Dispatching the Illuminate\Auth\Events\Registered event after a user's registration
        event(new Registered($user));
        // redirect with success message

        return redirect('/', 302)->with('success', 'Register successfuly, pleses verfiy your email');
    }
}
