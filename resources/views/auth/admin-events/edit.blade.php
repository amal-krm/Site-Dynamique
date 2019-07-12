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
<form action="{{ url('events/'.$event->id) }}" method="POST" enctype="multipart/form-data">
{{ method_field('PUT') }}
        <div class="form-group">
          <label >Titre de l'evenement</label>
          <input type="text" class="form-control" name="Titre" value="{{ $event->titre}}" >
        </div>
        <div class="form-group">
          <label >Date de l'evenement</label>
          <input class="form-control" type="date" value="2019-08-19" name="date" value="{{ $event->date}}">
        </div>
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description de l'evenement</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contenu" value="{{ $event->contenu}}"></textarea>
        </div>
        <div class="form-group col-md-6">
          <label >Photo de l'activite :</label>
          <input type="filePhoto" class="form-control-file" name="filePhoto" value="{{ url('storage/' . $event->filePhoto)}} " >
          </div>
          <div class="form-group col-md-6">
          <label >Video de  l'activite :</label>
          <input type="fileVideo" class="form-control-file" name="fileVideo" value="{{ url('storage/' . $event->fileVideo)}} " >
          </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        @csrf
</form>
</div>
@endsection
