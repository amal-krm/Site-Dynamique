@extends('layouts.app')

@section('content')
<style>
.center {
  margin: auto;
  width: 70%;
  padding: 10px;
}
</style>
<body >

<div class="center">
<p style="text-align:right;">
<a href="/events" >Annuler  </a></p>
<form action="/events" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label >Titre de l'evenement</label>
          <input type="text" class="form-control" name="Titre" >
        </div>
        <div class="form-group">
          <label >Date de l'evenement</label>
          <input class="form-control" type="date" value="2019-08-19" name="date">
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description de l'evenement</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contenu"></textarea>
        </div>
        <div class="form-group col-md-6">
        <label >Photo  de l'activite :</label>
        <input type="file" class="form-control-file" name="filePhoto" multiple>
        </div>
        <div class="form-group col-md-6">
        <label >Video  de l'activite :</label>
        <input type="file" class="form-control-file" name="fileVideo" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        @csrf
</form>
</div>
@endsection
