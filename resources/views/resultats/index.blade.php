@extends('layouts.base')

@section('title', 'Liste des résultats')

@section('content')
    <div class="container">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h4>Liste des résultats</h4>
            </div>
            <div class="col text-right">
                <a class="btn btn-primary" href="{{ route('resultats.create') }}">Ajouter</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Résultat du</th>
                <th scope="col">Centre</th>
                <th scope="col">Contiens les codes</th>
                <th scope="col">Afficher</th>
            </tr>
            </thead>
            <tbody>
            @foreach($resultats as $resultat)
                <tr>
                    <th scope="row">{{ $resultat->id }}</th>
                    <td>{{ $resultat->date_document->format('d-m-Y') }}</td>
                    <td>{{ $resultat->Centre->libelle }} - {{ $resultat->Centre->ville }}</td>
                    <td>
                        @foreach($resultat->SubResultats as $k => $SubResultat)
                            @if($k > 0)
                                , {{ $SubResultat->code }}
                            @else
                                {{ $SubResultat->code }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('resultats.show', $resultat) }}" class="btn btn-success">Afficher</a>
                        <a href="{{ route('resultats.edit', $resultat) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('resultats.destroy', $resultat) }}" method="POST" class="d-inline">
                            @csrf
                            {{ method_field('DELETE') }}
                        <button class="btn btn-danger d-inline" type="submit">Supprimer le résultat</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
