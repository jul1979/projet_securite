@extends('layouts.app')

@section( 'content')
    <div>
        <h1 class="">
            LES DEPOTS
        </h1>
        <div>
            <table  class="table table-success table-striped">
            <tr>
                <th>Nom du dépôt</th>
                <th>Nom de l'utilisateur</th>
                <th>Nombre de commits</th>
            </tr>
                @foreach ($repos as $repo)
                    <tr>
                        <td id="{{$repo->id_du_depot}}" onclick="reply_click(this.id)"><a  href="#">{{ $repo->Nom_du_depot }} </a></td>
                        <td>{{ $repo->Nom_utilisateur}}</td>
                        <td>{{ $repo-> nombre_de_commits }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <br><br>
        <a href="{{route('welcome')}}">Retour à la page Principale</a>
    </div>
@endsection
@section('infoRepo')
<p id="detail">
</p>
    @endsection

