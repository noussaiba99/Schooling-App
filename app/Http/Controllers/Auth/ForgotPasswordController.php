<?php

namespace tp_Igl\Http\Controllers\Auth;

use tp_Igl\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Reset Password.
     * 
     * This function is responsible for handling password reset emails and
     * includes a trait which assists in sending these notifications from
     * the application to the users.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
