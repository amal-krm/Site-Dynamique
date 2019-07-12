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
<form action="/activities" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Contenu de l'activite :</label>
      <textarea class="form-control w-100" name="message"  cols="30" rows="9" name="contenu"></textarea>
    </div>
    <div class="form-group col-md-6">
    <label >Photo  de l'activite :</label>
    <input type="file" class="form-control-file" name="filePhoto" multiple>
    </div>
    <div class="form-group col-md-6">
    <label >Video  de l'activite :</label>
    <input type="file" class="form-control-file" name="fileVideo" multiple>
    </div>
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
  <button type="submit" class="btn btn-primary">Ajouter</button>
  @csrf
</form>
</div>
@endsection
