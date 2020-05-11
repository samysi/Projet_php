<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Dossier extends Model{

	protected $fillable = ['cv', 'lettre', 'relever_note', 'imprime_ecran', 'id_etudiant', 'id_statut', 'id_formation'];
	public function statut(){
		return $this->belongsTo('App\Statut', 'id_statut', 'id_statut');
	}
	public function etudiant(){
		return $this->belongsTo('App\Etudiant', 'id', 'id_etudiant');
	}
	public function formation(){
		return $this->belongsTo('App\Formation', 'id_formation', 'id_formation');
	}
}