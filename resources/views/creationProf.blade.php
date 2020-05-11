@extends('layout')

@section('contenu')
<center><h1 style="font-weight: bold; font-size: 70px;"">Inscription Prof</h1></center>
<center><div class="corpsFormulaire" style="width: 500px; height: 500px;font-weight: bold; font-size: 20px ">
    <form action="/creationProf" method="post">

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


       <input type="submit" class="btn btn-success" value="Ajouter">  
   </div>  
</center>   

</form>
@endsection