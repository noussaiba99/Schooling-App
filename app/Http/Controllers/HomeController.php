<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;

use tp_Igl\Demande;
use tp_Igl\Etudiant;
use tp_Igl\User;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{

    /**
     * Authentification Checking.
     * 
     * the function will check :
     * if the user is already login then it will return the Etudiant's profile page,
     * else it will return the login/registration page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) return view('etudiant');
        return view('auth.login');
    }

}
