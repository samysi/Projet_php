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

    	/*$etudiant=auth()->user();
    	$etudiant->password = bcrypt(request('password'));
    	$etudiant->save();*/

    auth()->user()->update([
        'password' => bcrypt(request('password')),
    ]);

    return 'Votre mot de passe a bien été mis à jour';

    }

    public function deconnexion(){
        auth()->logout();
        return redirect('/');
    }

   /* public function candidature(){
        return view('candidature');*/
}
