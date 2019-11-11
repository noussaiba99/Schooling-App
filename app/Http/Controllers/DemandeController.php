<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;
use tp_Igl\Demande;


class DemandeController extends Controller
{
    public function viewDemande()
    {
        $demande=Demande::all();
        $arr=Array('demande'=>$demande);
        return view('demande.view',$arr);
    }
    public function addDemande(Request $request)
    {
        //only excute when post
        if ($request->isMethod('post'))
        {  // echo $request;
            $newdemande=new Demande();
            $newdemande->id=$request->input('matricule');
            /*$newdemande->prenom=$request->input('prenom');
            $newdemande->grpActuel=$request->input('grpActuel');*/
            $newdemande->grpDest=$request->input('grpDest');
            $newdemande->save();
        }
        return view('demande.view');

    }
}
