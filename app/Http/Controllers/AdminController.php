<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Dossier;
use App\Statut;

class AdminController extends Controller
{
	public function formulaire(){
		return view('creationProf');
	}

	public function traitement(){

		request()->validate([
			'email' => ['required', 'email'],
			'password' => ['required', 'min:5'],

		]);

		$etudiants = Etudiant::create([
			
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

	public function changer($id_dossier){
		$dossier=Dossier::find($id_dossier);
		$dossier->id_statut=request('statut');
		$dossier->save();

		return redirect()->back();
	}
	//fonction qui affiche un seul dossier + une qui change le statut
}
