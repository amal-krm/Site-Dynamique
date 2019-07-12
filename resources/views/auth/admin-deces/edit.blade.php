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
<a href="/dece" >Annuler  </a></p>
<form action="{{ url('deces/'.$dece->id) }}" method="POST" >
            {{ method_field('PUT') }}  
            <label >Contenu des Condoléances :</label>
            <input  class="form-control w-100" type="text" name="contenu" style="text-align:right;" value="{{ $dece->contenu}}">
        <div class="py-3">
        <button type="submit" class="btn btn-primary ">Modifier</button>
        </div>
        @csrf
</form>
      </div>

</div>
@endsection