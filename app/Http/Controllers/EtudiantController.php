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
    public function same($a, $b)
    {
        $n = strlen($a);
        $m = strlen($b);
        if ($n != $m) return false;
        for ($i = 0; $i < $n; $i++){
            if ($a[$i] != $b[$i]) return false;
        }
        return true;
    }

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
     * Show the current Etudiant Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('etudiant');
    }

    /**
     * Make a Group Swap or Password change.
     * 
     * the function will check :
     * if the $request is Method post : 
     * 
     *
     * then if it has form1 : 
     * it will make a new permutation Demande
     * 
     * else if it has form2 : 
     * it will change the current User's Password
     *
     * @param \Illuminate\Http\Request $request
     * 
     * @return @return \Illuminate\Contracts\Support\Renderable
     */
    public function demande(Request $request)
    {
        //only excute when post
        if ($request->isMethod('post'))
        {  // echo $request;
            if ($request->has('form1'))
            {

                $newdemande=new Demande();
                $emaill= auth()->user()->email;
                $nomm=auth()->user()->nom;
                $prenomm=auth()->user()->prenom;
                $groupe=auth()->user()->groupe;

                $user_id=User::select('id')->where('email',$emaill)->first();
                $etudiant=User::find($user_id)->first();
                if (!$etudiant->permute) {


                    $newdemande->email=$emaill;
                    $newdemande->nom=$nomm;
                    $newdemande->prenom=$prenomm;
                    $newdemande->grpActuel=$groupe;
                    $newdemande->grpDest=$request->input('grpDest');
                    $newdemande->save();

                    $etudiant->permute=1;
                    $etudiant->save();
                }
            }
            if ($request->has('form2'))
            {

                    if (!(Hash::check($request->get('current-password'), auth()->user()->password))) {
                // The passwords matches
                return redirect()->back()->with("error","les 2 mots de passe sont pas compatibles.");
            }

            if($this->same($request->get('current-password'), $request->get('new-password'))){
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
        return view('etudiant');
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

