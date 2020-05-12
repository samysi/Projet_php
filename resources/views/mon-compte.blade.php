@extends('layout')

@section('contenu')

<a href="/candidature" style="float: right; margin-right: 20px; margin-bottom: 20px;" class="btn btn-primary">Candidature</a>

	<center><h1 style="font-weight: bold; font-size: 70px;"">Mon compte</h1></center>
<center><div class="corpsFormulaire" style="width: 500px; height: 500px;font-weight: bold; font-size: 20px ">

 

	<form action="/modification-mdp" method="post">
			
		{{ csrf_field()}}

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