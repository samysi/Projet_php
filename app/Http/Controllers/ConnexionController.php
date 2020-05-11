<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ConnexionController extends Controller
{
    public function formulaire(){
    	return view('connexion');
    }

    public function traitement(){
    	request()->validate([
           'email' => ['required', 'email'],
           'password' => ['required', 'min:5'],

       ]);
    	$resultat = auth()->attempt([
    		'email' => request('email'),
    		'password' => request('password'),
    	]);

    	if ($resultat){
            if (Auth()->user()->prof) {
                return redirect('/compteProf');
            }
            return redirect('/mon-compte');
        }
        return back()->withInput()->withErrors([
            'email'=> 'Vos identifants sont incorrects',
        ]);
    }
    
}
