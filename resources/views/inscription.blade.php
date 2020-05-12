@extends('layout')

@section('contenu')
<center><h1 style="font-weight: bold; font-size: 70px;"">Inscription</h1></center>
<center><div class="corpsFormulaire" style="width: 500px; height: 500px;font-weight: bold; font-size: 20px ">
  <form action="/inscription" method="post">

    {{ csrf_field() }}

    <div class="form-group">
     <label for="nom">Entrez votre nom</label>
     <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" value="{{ old('nom')}}">
     @if($errors->has('nom'))
     <p class="alert alert-danger" role="alert">{{ $errors->first('nom') }}</p>
     @endif
   </div>

   <div class="form-group">
     <label for="prenom">Entrez votre prenom</label>
     <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prenom" value="{{ old('prenom')}}">
     @if($errors->has('prenom'))
     <p>{{ $errors->first('prenom') }}</p>
     @endif
   </div>         

   <div class="form-group">
     <label for="email">Entrez votre email</label>
     <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email')}}">
     @if($errors->has('email'))
     <p class="alert alert-danger" role="alert">{{ $errors->first('email') }}</p>
     @endif
   </div>          

   <div class="form-group">
     <label for="numero">Entrez votre mot de passe</label>
     <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passse">
     @if($errors->has('password'))
     <p class="alert alert-danger" role="alert">{{ $errors->first('password') }}</p>
     @endif
   </div>
   <div class="form-group">
     <label for="numero">Entrez votre date de naissance</label>
     <input type="text" name="date_naissance" class="form-control" id="num" placeholder="aaaa-mm-jj" value="{{ old('date_naissance')}}">
     @if($errors->has('date_naissance'))
     <p class="alert alert-danger" role="alert">{{ $errors->first('date_naissance') }}</p>
     @endif
   </div>

   <div class="form-group">
     <label for="numero">Entrez votre adresse</label>
     <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse" value="{{ old('adresse')}}">
     @if($errors->has('adresse'))
     <p>{{ $errors->first('adresse') }}</p>
     @endif
   </div>

   <div class="form-group">
     <label for="numero">Entrez votre numéro</label>
     <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone" value="{{ old('telephone')}}">
     @if($errors->has('telephone'))
     <p>{{ $errors->first('telephone') }}</p>
     @endif
   </div>


   <input type="submit" class="btn btn-success" value="Ajouter">   
 </div>  
</center>   

</form>
@endsection