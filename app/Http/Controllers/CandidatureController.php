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
    if (auth()->user()->dossier!=null && auth()->user()->dossier->statut!=null && auth()->user()->dossier->statut->libelle_statut=='Reçu incomplet en attente de complément'){ // Verfifie si le dossier n'est pas null et que le statut existe et qu'il est en "reçu incomplet"
    return view('candidatureIncomplet');
}

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
    $request->lettre->storeAs('/app',  'lettre_motivation_'.auth()->user()->id .'.pdf');
    $request->relever_note->storeAs('/app',  'relever_note_'.auth()->user()->id .'.pdf');
    $request->imprime_ecran->storeAs('/app',  'imprime_ecran_'.auth()->user()->id .'.pdf');

    $dossier=Dossier::create(['id_etudiant'=>auth()->user()->id,
        'cv'=>'cv_'.auth()->user()->id .'.pdf',
        'lettre'=>'lettre_motivation_'.auth()->user()->id .'.pdf',
        'relever_note'=>'relever_note_'.auth()->user()->id .'.pdf',
        'imprime_ecran'=>'imprime_ecran_'.auth()->user()->id .'.pdf',
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

public function redeposercandidature(Request $request){
    $request->cv->storeAs('/app',  'cv_'.auth()->user()->id .'.pdf');
    $request->lettre->storeAs('/app',  'lettre_motivation_'.auth()->user()->id .'.pdf');
    $request->relever_note->storeAs('/app',  'relever_note_'.auth()->user()->id .'.pdf');
    $request->imprime_ecran->storeAs('/app',  'imprime_ecran_'.auth()->user()->id .'.pdf');

    $dossier=auth()->user()->dossier->update([
        'id_statut'=>1, 
    ]);
    return redirect('/validation');
}
}
