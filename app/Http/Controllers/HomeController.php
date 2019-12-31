<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;

use tp_Igl\Demande;
use tp_Igl\Etudiant;
use tp_Igl\User;

use tp_Igl\Http\Controllers\Auth;
class HomeController extends Controller
{
    
    public function index()
    {
        return view('auth.login');
    }
    
}
