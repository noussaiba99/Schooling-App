<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use tp_Igl\Demande;
use tp_Igl\Etudiant;
use tp_Igl\User;


class EtudiantController extends Controller
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
        return view('etudiant.add');
    }
    public function demande(Request $request)
    {
        
   
         //only excute when post
         if ($request->isMethod('post'))
         {  // echo $request;
            
            if ($request->has('form1')) 
            {
                echo "<script>console.log('Debug Objects: " . "700" . "' );</script>";
             $newdemande=new Demande();
             $emaill= auth()->user()->email;
             $nomm=auth()->user()->nom;
             $prenomm=auth()->user()->prenom;
             $groupe=auth()->user()->groupe;

             $newdemande->email=$emaill;
             $newdemande->nom=$nomm;
             $newdemande->prenom=$prenomm;
             $newdemande->grpActuel=$groupe;
             $newdemande->grpDest=$request->input('grpDest');
             $newdemande->save();

            
             $user_id=User::select('id')->where('email',$emaill)->first();
             $etudiant=User::find($user_id)->first();
             $etudiant->permute=1;
             $etudiant->save(); 

             }
             if ($request->has('form2')) 
             {
                echo "<script>console.log('Debug Objects: " . "8800" . "' );</script>";
                       if (!(Hash::check($request->get('current-password'), auth()->user()->password))) {
                    // The passwords matches
                    return redirect()->back()->with("error","les 2 mots de passe sont pas compatibles.");
                }

                if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
                    //Current password and new password are same
                    return redirect()->back()->with("error","le nouveau mot de passe est exactement comme l'ancien. SVP choisissez un nouveau.");
                }

                $validatedData = $request->validate([
                    'current-password' => 'required',
                    'new-password' => 'required|string|min:6|confirmed',
                ]);

                //Change Password
                $user = auth()->user();
                $user->password = bcrypt($request->get('new-password'));
                $user->save();

                return redirect()->back()->with("success","votre mot de passe a été changé avec succés");
             }  
            
         }
        return view('etudiant.add');
    }
     public function render($request, Exception $exception)
{
    // This will replace our 404 response with
    // a JSON response.
    if ($exception instanceof ModelNotFoundException &&
        $request->wantsJson())
    {
        return response()->json([
            'data' => 'Resource not found'
        ], 404);
    }

    return parent::render($request, $exception);
}

}

