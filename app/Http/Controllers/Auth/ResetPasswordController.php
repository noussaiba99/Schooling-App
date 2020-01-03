<?php

namespace tp_Igl\Http\Controllers\Auth;

use tp_Igl\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where toooooo redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Password Reset Controller.
     * 
     * This function is responsible for handling password reset requests
     * and uses a simple trait to include this behavior.
     * 
     * @var string $redirectTo Where to redirect users after resetting their password.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
