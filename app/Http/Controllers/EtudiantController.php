<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;
use tp_Igl\Etudiant;

class EtudiantController extends Controller
{
    public function viewEtudiant()
    {
        $etudiant=Etudiant::all();
        $arr=Array('etudiant'=>$etudiant);
        return view('etudiant.view',$arr);
    }
    public function addEtudiant(Request $request)
    {
        //only excute when post
        if ($request->isMethod('post'))
        {  // echo $request;
           $newetudiant=new Etudiant();
            $newetudiant->nom=$request->input('nom');
            $newetudiant->prenom=$request->input('prenom');
            $newetudiant->email=$request->input('email');

            $newetudiant->save();

       
        }
        return view('etudiant.add');

    }
    public function modifierEtudiant(Request $request,$id)
    {
        //only excute when post
        if ($request->isMethod('post'))
        {  // echo $request;
           $newetudiant=new Etudiant();
            $newetudiant->nom=$request->input('nom');
            $newetudiant->prenom=$request->input('prenom');
            $newetudiant->email=$request->input('email');

            $newetudiant->save();

       
        }
        $etudiant=Etudiant::find($id);
        $arr=Array('etudiant'=>$etudiant);
            return view('etudiant.modifier',$arr);
    }
    

}
