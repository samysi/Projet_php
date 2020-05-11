<?php

namespace App\Http\Controllers;

use App\Etudiant;

class InscriptionController extends Controller
{
	public function formulaire(){
		return view('inscription');
	}

	public function traitement(){
		request()->validate([
			'email' => ['required', 'email'],
			'password' => ['required', 'min:5'],
			'date_naissance' => ['required', 'date'],

		]);

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
