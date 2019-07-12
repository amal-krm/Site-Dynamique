@extends('layouts.app')

@section('content')
<style>
.center {
  margin: auto;
  width: 90%;
  padding: 10px;
}
</style>
<body >
<h1>Les Activites :</h1>
<div class="center">

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Video</th>
      <th scope="col">Contenu</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($activities as $activitie)
    <tr>
      <th scope="row">{{ $activitie->id}}</th>
      @if ( !empty ( $activitie->filePhoto) ) 
        <td><img src="{{asset('storage/' .$activitie->filePhoto ) }}" class="img-thumbnail" style="width:400px;height:300px"></td>
      
      @else
        <td></td>
      
      @endif
      @if ( !empty ( $activitie->fileVideo) ) 
        <!--<td><iframe width="200px" height="100px" src="{{asset('storage/' .$activitie->fileVideo) }}" ></iframe>  </td>   -->
        <td><video width="400px" height="300px" controls>
            <source src="{{asset('storage/' .$activitie->fileVideo) }}" type="video/mp4" />
        </video></td>
      @else
        <td></td>
      
      @endif
      <td>{{ $activitie->contenu}}</td>
      <td><a href="{{url('activities/'.$activitie->id.'/delete')}}">Supprimer</a></td>
      <td><a href="{{url('activities/'.$activitie->id.'/edit')}}">Modifier</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="center">
    <a href="/add-activities">Ajouter une activite</a>
</div>
</body>
@endsection
</html>