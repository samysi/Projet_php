@extends('layout')

@section('contenu')
<a href="/deconnexion" style="float: left; margin-left: 20px; margin-bottom: 20px;" class="btn btn-danger">Déconnexion</a>

<center><div class="corpsFormulaire" style="width: 800px; height: 500px;font-weight: bold; font-size: 20px ">
	<center><h1 style="font-weight: bold; font-size: 70px;"">Suivi des dossier</h1></center>

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
		
		<form action="/modification-mdp" method="post">
			
		{{ csrf_field()}}
<center><h2 style="font-size: 30px;">Changer mot de passe</h2></center>
<div class="form-group">
         <label for="numero">Entrez votre nouveau mot de passe</label>
         <input type="password" name="password" class="form-control" id="password" placeholder="Nouveau mot de passe">
         @if($errors->has('password'))
         <p class="alert alert-danger" role="alert">{{ $errors->first('password') }}</p>
         @endif
     </div>

<input type="submit" class="btn btn-success" value="Modifier mot de passse">
        
            
            
	</form>
	</div>
</center>

@endsection