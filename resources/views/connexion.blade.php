@extends('layout')

@section('contenu')

<center><h1 style="font-weight: bold; font-size: 70px;"">Connexion</h1></center>
<center><div class="corpsFormulaire" style="width: 500px; height: 500px;font-weight: bold; font-size: 20px ">
    <form action="/connexion" method="post">
      
       {{ csrf_field() }}

       
       
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

     
     <input type="submit" class="btn btn-success" value="Connexion"> 
 </div>  
</center>  
</form>
@endsection