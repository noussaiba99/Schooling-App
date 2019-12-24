<?php

namespace tp_Igl\Http\Controllers\Auth;

use tp_Igl\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/etudiant';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        echo "<script>console.log('Debug Objects: " . "700" . "' );</script>";

        $this->middleware('guest')->except('logout');
    }
}
