<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;
use tp_Igl\User;
use tp_Igl\Demande;

class adminController extends Controller
{
    public function contact($id,$name)
    {
        $arrr=Array('id'=>$id ,'name'=>$name);
        return view('admin.contact',$arrr);
    }

    public function home()
    {
        $demandes=Demande::all();
        return response()->json($demandes);
    }

    function requestt(Request $request) 
    {
        return $request->user();
    }
}
