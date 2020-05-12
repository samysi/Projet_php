@extends('layout')

@section('contenu')
<a href="/compteProf" class="btn btn-info">Mon compte Prof</a>

<center><h1 style="font-weight: bold; font-size: 70px;"">Suivi des dossier</h1></center>


<center><div class="corpsFormulaire" style="width: 800px; height: 500px;font-weight: bold; font-size: 20px ">
<p style="color: green;">Statut du dossier : {{$dossier->statut->libelle_statut}}</p>

    <center><h2 style="font-size: 30px;">Element téléchargeable</h2></center>

<form method="get">
	    <a class="btn btn-lg" href="/telecharger?path={{$dossier->cv}}">CV</a>
        <a class="btn btn-lg" href="/telecharger?path={{$dossier->lettre}}">Lettre de motivation</a>
        <a class="btn btn-lg" href="/telecharger?path={{$dossier->relever_note}}">Relever de note</a>
        <a class="btn btn-lg" href="/telecharger?path={{$dossier->imprime_ecran}}">Imprime_ecran</a>
</form>

 
 
<form method="post" action="{{route('changerStatut', $dossier->id_dossier)}}">
	@csrf
      <select name="statut" class="mdb-select md-form">
			<option value="" disabled selected>Choisir un statut</option>
			@foreach($statut as $statut)

			<option value="{{$statut->id_statut}}">{{$statut->libelle_statut}}</option>
			@endforeach
		</select>
		<input type="submit" class="btn btn-success" value="Envoyer">
</form>

	</div>
</center>

@endsection