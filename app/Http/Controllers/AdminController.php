<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Prof;
use App\Dossier;
use App\Statut;

class AdminController extends Controller
{
	public function formulaire(){
		return view('creationProf');
	}
// Fonction de creation de prof 
	public function traitement(){

		request()->validate([
			'email' => ['required', 'email'],
			'password' => ['required', 'min:5'],

		]);
		// Verification que l'individu n'est pas déjà present dans la base en fonction de l'adresse mail
		if (Prof::where('email', request('email'))->first()!=null) {
			return back()->withInput()->withErrors([
				'email'=> 'Email déjà existant',
			]);
		}

		$profs = Prof::create([
			
			'nom' => request('nom'),
			'prenom' => request('prenom'),
			'email' => request('email'),
			'password' => bcrypt(request('password')),
			'date_naissance' => '1999-01-01',
			'adresse' => 'rien',
			'telephone' => '0',
			'prof'=>true,

		]);

		return redirect('/compteProf');
	}

// permet l'affichage de tous les candidats 
	public function suivre(){

		$dossier=Dossier::all();
		return view('suivi', [
			'dossier' => $dossier,
		]);
	}
 
	public function suivreDossier($id_dossier){
		$dossier=Dossier::find($id_dossier);
		$statut=Statut::all();
		return view('suiviUnDossier', [
			'dossier' => $dossier,
			'statut' => $statut,
		]);
	}
	//fonction qui affiche un seul dossier + une qui change le statut
	public function changer($id_dossier){
		$dossier=Dossier::find($id_dossier);
		$dossier->id_statut=request('statut');
		$dossier->save();

		return redirect()->back();
	}
}
