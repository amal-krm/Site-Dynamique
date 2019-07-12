@extends('layouts.app')

@section('content')
<style>
.center {
  margin: auto;
  width: 90%;
  padding: 10px;
}
iframe { 
  display: block;
}
</style>

<body>
<h1>Les Evenements</h1>
<div class="center">
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Date</th>
      <th scope="col">Description de l'evenement</th>
      <th scope="col">Photo</th>
      <th scope="col">Video</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($events as $event)
    <tr>
      <th scope="row">{{ $event->id}}</th>
      <td>{{ $event->titre}}</td>
      <td>{{ $event->date}}</td>
      <td>{{ $event->contenu}}</td>
      @if ( !empty ( $event->filePhoto) ) 
        <td><img src="{{asset('storage/' .$event->filePhoto ) }}" class="img-thumbnail" style="width:400px;height:300px"></td>
      
      @else
        <td></td>
      
      @endif
      @if ( !empty ( $event->fileVideo) ) 
        <!--<td><iframe width="200px" height="100px" src="{{asset('storage/' .$event->fileVideo) }}" ></iframe>  </td>   -->
        <td><video width="400px" height="300px" controls>
            <source src="{{asset('storage/' .$event->fileVideo) }}" type="video/mp4" />
        </video></td>
      @else
        <td></td>
      
      @endif
      <td><a href="{{url('events/'.$event->id.'/delete')}}">Supprimer</a></td>
      <td><a href="{{url('events/'.$event->id.'/edit')}}">Modifier</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="center">
    <a href="/add-events">Ajouter un event</a>
</div>
</body>
@endsection
</html>