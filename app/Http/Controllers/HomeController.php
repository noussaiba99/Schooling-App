<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;

use tp_Igl\Demande;
use tp_Igl\Etudiant;

use tp_Igl\Http\Controllers\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function demande(Request $request)
    {
         //only excute when post
         if ($request->isMethod('post'))
         {  // echo $request;
             $newdemande=new Demande();
             $emaill= auth()->user()->email;
             $newdemande->email=$emaill;
             $newdemande->grpDest=$request->input('grpDest');
             $newdemande->save();

            
             $user_id=Etudiant::select('id')->where('email',$emaill)->first();
             $etudiant=Etudiant::find($user_id)->first();
             $etudiant->permute=1;
             $etudiant->save();

           /* // $newdemande->id=$request->input('id');
            // $idd=$request->input('id');
             $etudiant=Etudiant::find($idd);
             $etudiant->permute=1;
             /*$newdemande->prenom=$request->input('prenom');
             $newdemande->grpActuel=$request->input('grpActuel');
             $newdemande->grpDest=$request->input('grpDest');
             $newetudiant->permute=*/
            
         }
         return view('admin.home');
    }

}
