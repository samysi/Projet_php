@extends('layout')

@section('contenu')
<p>Votre dossier à été validé</p>
<p>Statut du dossier : {{$dossier->statut->libelle_statut}}</p>

<form method="get">
    <a href="telecharger?path={{$dossier->cv}}">cv</a>
<a href="telecharger?path={{$dossier->lettre}}">lettre</a>
<a href="telecharger?path={{$dossier->relever_note}}">relever</a>
<a href="telecharger?path={{$dossier->imprime_ecran}}">imprime_ecran</a>
</form>

@endsection