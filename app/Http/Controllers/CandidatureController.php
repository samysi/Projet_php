<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Dossier;
use Illuminate\Support\Facades\Storage;
use Response;

class CandidatureController extends Controller
{
      public function candidature(){
        if (auth()->user()->dossier!=null) {
            return redirect('/validation');
        }
        $formation=Formation::all();

    		return view('candidature', [
            'formation' => $formation,
        ]);
    }

    public function deposercandidature(Request $request){

    $request->cv->storeAs('/app',  'cv_'.auth()->user()->id .'.pdf');

       $dossier=Dossier::create(['id_etudiant'=>auth()->user()->id,
            'cv'=>'cv_'.auth()->user()->id .'.pdf',
            'lettre'=>$request->file('lettre'),
            'relever_note'=>$request->file('relever_note'),
            'imprime_ecran'=>$request->file('imprime_ecran'),
            'id_statut'=>1, 
            'id_formation'=>$request->formation,
            'commentaire'=>$request->commentaire,
        ]);
       return redirect('/validation');

    	}

        public function valider(){

            $dossier=auth()->user()->dossier;
            return view('validation', [
            'dossier' => $dossier,
        ]);
        }

        public function telecharge(Request $request)
{

    $file =storage_path().'/app/app/'. $request->path;
    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, $request->path, $headers);
}
  }
