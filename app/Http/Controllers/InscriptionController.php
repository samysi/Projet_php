<?php

namespace App\Http\Controllers;

use App\Etudiant;

class InscriptionController extends Controller
{
	public function formulaire(){
		return view('inscription');
	}

	//Fonction de création d'étudiant
	public function traitement(){
		request()->validate([
			'email' => ['required', 'email'],
			'password' => ['required', 'min:5'],
			'date_naissance' => ['required', 'date'],

		]);
		if (Etudiant::where('email', request('email'))->first()!=null) {
			return back()->withInput()->withErrors([
				'email'=> 'Email déjà existant',
			]);
		}
		$etudiants = Etudiant::create([
			
			'nom' => request('nom'),
			'prenom' => request('prenom'),
			'email' => request('email'),
			'password' => bcrypt(request('password')),
			'date_naissance' => request('date_naissance'),
			'adresse' => request('adresse'),
			'telephone' => request('telephone'),

		]);

		return redirect('/connexion');
	}
}
