<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatureController extends Controller
{
      public function candidature(){
    		return view('candidature');
    }

    public function deposercandidature(){
    	echo "Votre dossier contient : ";
    	if (!empty($_FILES)) {

    		$file_cv = $_FILES['cv']['name'];
    		$file_lettre = $_FILES['lettre']['name'];
    		echo" Un CV : " .$file_cv ;
    		echo" Une lettre de motivation : " .$file_lettre;

    	}
    }
}
