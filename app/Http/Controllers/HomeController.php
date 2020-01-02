<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;

use tp_Igl\Demande;
use tp_Igl\Etudiant;
use tp_Igl\User;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{

    public function index()
    {
        if (Auth::check()) return view('etudiant');
        return view('auth.login');
    }

}
