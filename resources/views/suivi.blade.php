@extends('layout')

@section('contenu')
<a href="/mon-compte" class="btn btn-info">Mon compte</a>

<center><h1 style="font-weight: bold; font-size: 70px;"">Suivi des dossier</h1></center>

<center><div class="corpsFormulaire" style="width: 800px; height: 500px;font-weight: bold; font-size: 20px ">

    <center><h2 style="font-size: 30px;">Element téléchargeable</h2></center>

    <table class="table table-hover">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Statut</th>
					<th scope="col">Formation</th>
					<th scope="col"></th>
					<th scope="col"></th>
				</tr>
			</thead>
			@foreach($dossier as $dossier)
			
			<tr>
				<th>
					{{ $dossier -> statut -> libelle_statut}}
				</th>
				<th>
					{{ $dossier -> formation -> libelle_formation}}
				</th>
				<th>
					<button class="btn" type="button"><a href="{{ route('afficherUnDossier', $dossier->id_dossier ) }}">Afficher</a></button>
				</th>
			</tr>
			@endforeach
		</table>
	</div>
</center>

@endsection