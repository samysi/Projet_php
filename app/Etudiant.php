<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Etudiant extends Model implements Authenticatable{
	use BasicAuthenticatable;

	protected $fillable = ['email', 'nom', 'prenom', 'password', 'date_naissance', 'adresse', 'telephone','prof'];


	public function getRememberTokenName()
	{
		return '';
	}

	public function dossier(){
		return $this->hasOne('App\Dossier', 'id_etudiant', 'id');
	}
}

