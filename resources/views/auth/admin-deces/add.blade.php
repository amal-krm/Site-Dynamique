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
      <form action="/deces" method="POST" >
          
            <label >Contenu des Condoléances :</label>
            <input  class="form-control w-100" type="text" name="contenu" style="text-align:right;" value="للأسف">
        <div class="py-3">
        <button type="submit" class="btn btn-primary ">Ajouter</button>
        </div>
        @csrf
      </form>
      </div>

</div>
@endsection
