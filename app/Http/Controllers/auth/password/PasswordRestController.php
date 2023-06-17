<?php

namespace App\Http\Controllers\auth\password;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;

class PasswordRestController extends Controller
{
    public function __invoke(Request $request, string $token):View|Factory
    {
        return view('auth.password.reset', ['token' => $token]);
    }
}
