@extends('layouts.app')

@section('content')
    <h1>Bienvenue  dans ESI_GIT</h1>
    <div><a href="{{route('homepage')}}" class="btn-success">Page d'acceuil</a>   </div>
    <div><a href="{{route('allRepos')}}">Liste des dépôts </a>   </div>
@endsection
