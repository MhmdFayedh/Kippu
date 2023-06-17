<?php

namespace App\Http\Controllers\auth\verification;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;

class VerificationNoticeController extends Controller
{
    public function __invoke(Request $request): View|Factory
    {
        return view('auth.verify-email');
    }
}
