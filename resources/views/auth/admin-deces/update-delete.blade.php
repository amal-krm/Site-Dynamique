@extends('layouts.app')

@section('content')
<style>
.center {
  margin: auto;
  width: 70%;
  padding: 10px;
}
</style>
<body>
<h1>Les Condoléances</h1>
<div class="center">
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Contenu</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($deces as $dece)
    <tr>
      <th scope="row">{{ $dece->id}}</th>
    
      <td>{{ $dece->contenu}}</td>
      <td><a href="{{ url('deces/'.$dece->id.'/delete')}}">Supprimer</a></td>
      <td><a href="{{url('deces/'.$dece->id.'/edit')}}">Modifier</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="center">
    <a href="/add-deces">Ajouter des Condoléances</a>
</div>
</body>
@endsection
</html>