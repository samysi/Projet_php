@extends('layout')

@section('contenu')
<a href="/mon-compte" class="btn btn-info">Mon compte</a>
<center><h1 style="font-weight: bold; font-size: 70px;"">Candidature</h1></center>
<center><h2 style="font-size: 30px;">Incomplet veuilliez la ressaisir</h2></center>

<center><div class="corpsFormulaire" style="width: 500px; height: 500px;font-weight: bold; font-size: 20px ">

    <form action="/completerCandidature" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}

       <div class="form-group">
        <label for="cv">CV</label>
        <input type="file" class="form-control-file" name="cv">
    </div>
    <div class="form-group">
        <label for="lettre">Lettre de motivation</label>
        <input type="file" class="form-control-file" name="lettre">
    </div>
    <div class="form-group">
        <label for="relever_note">Relever de note</label>
        <input type="file" class="form-control-file" name="relever_note">
    </div>

    <div class="form-group">
        <label for="imprime_ecran">Imprime ecran</label>
        <input type="file" class="form-control-file" name="imprime_ecran">
    </div>

    <input type="submit" class="btn btn-success" value="Déposer dossier">


</div>  
</center>
</form>


@endsection