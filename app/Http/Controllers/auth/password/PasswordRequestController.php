<?php

namespace App\Http\Controllers\auth\password;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;

class PasswordRequestController extends Controller
{
    public function __invoke(Request $request): View|Factory
    {
        return view('auth.password.forgot');
    }
}
