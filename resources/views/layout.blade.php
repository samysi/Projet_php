<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Miage PHP</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Styles -->
    
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    
</style>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" font-size: large;font-weight: bold;">
    <a class="navbar-brand" href="/">Miage PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav" style="padding-left: 28%;">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/inscription">Inscription etudiant<span class="sr-only">(current)</span></a>
    </li>
    @if(auth()->check()==true && auth()->user()->email=='admin@parisnanterre.fr')
     <li class="nav-item active">
        <a class="nav-link" href="/creationProf">Inscription enseignant<span class="sr-only">(current)</span></a>
    </li>
    @endif
    @if(auth()->check()==false)
    <li class="nav-item active">
        <a class="nav-link" href="/connexion">Connexion<span class="sr-only">(current)</span></a>
    </li> 
    @else
       <li class="nav-item active">
        <a class="nav-link" href="/deconnexion">Deconnexion<span class="sr-only">(current)</span></a>
    </li> 
    @endif
</ul>
</div>
</nav>
<br>
<div class="container">
    @yield('contenu')
</div>
<footer style="padding-top: 180px;" class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#" style="font-size: 30px;"> Samy SI-MOHAMMED</a>
</div>
<!-- Copyright -->

</footer>
</body>
</html>
