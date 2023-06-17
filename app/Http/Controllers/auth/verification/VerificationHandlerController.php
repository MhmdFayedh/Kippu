<?php

namespace App\Http\Controllers\auth\verification;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationHandlerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(EmailVerificationRequest $request): Redirector|RedirectResponse
    {
        $request->fulfill();
    
        return redirect('/');
    }
}
