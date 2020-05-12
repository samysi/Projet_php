<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function compte(){
    		if (auth()->guest()){
    			return redirect('/connexion')->withErrors([
    				'email' => "Vous devez être connecté pour voir cette page",
    			]);
    		}
            return view('mon-compte');
    }

    public function modificationmdp(){
    	if (auth()->guest()){
    			return redirect('/connexion');
    		}
    	request()->validate([
    		'password'=>['required', 'min:5'],
    	]);

    auth()->user()->update([
        'password' => bcrypt(request('password')),
    ]);
     if (Auth()->user()->prof) {
                return redirect('/compteProf');
            }

    return redirect('/mon-compte');

    }

    public function deconnexion(){
        auth()->logout();
        return redirect('/');
    }
}
