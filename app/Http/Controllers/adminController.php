<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;
use tp_Igl\User;
use tp_Igl\Demande;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{


    public function home()
    {
       $demandes=Demande::all();
       return view('admin')->with("demandes", $demandes);
    }


}
