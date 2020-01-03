<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;
use tp_Igl\User;
use tp_Igl\Demande;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{

    /**
     * Shows the Swap Requests.
     * 
     * the function will retrieve all data from Database wich correspond to the Demandes 
     * sent by Etudiants and Display them in the Admin Page..
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
       $demandes=Demande::all();
       return view('admin')->with("demandes", $demandes);
    }


}
