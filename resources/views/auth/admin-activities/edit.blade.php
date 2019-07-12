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
<a href="/activities" >Annuler </a></p>
<form action="{{ url('activities/'.$activitie->id) }}" method="POST" enctype="multipart/form-data">
{{ method_field('PUT') }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Contenu de l'activite :</label>
      <input  class="form-control w-100" type="text"  value="{{ $activitie->contenu}}" name="message">
    </div>
    <div class="form-group col-md-6">
    <label >Photo de l'activite :</label>
    <input type="file" class="form-control-file" name="filePhoto" value="{{ url('storage/' . $activitie->filePhoto)}} " >
    </div>
    <div class="form-group col-md-6">
    <label >Video de  l'activite :</label>
    <input type="file" class="form-control-file" name="fileVideo" value="{{ url('storage/' . $activitie->fileVideo)}} " >
    </div>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>Il faut saisir un fichier</li>
            @endforeach
        </ul>
    </div>
@endif
  <button type="submit" class="btn btn-primary">Modifier</button>
  @csrf
</form>
</div>
@endsection
