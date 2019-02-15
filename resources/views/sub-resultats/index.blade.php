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
                <th scope="col">Contiens les codes</th>
                <th scope="col">Afficher</th>
            </tr>
            </thead>
            <tbody>
            @foreach($resultats as $resultat)
                <tr>
                    <th scope="row">{{ $resultat->id }}</th>
                    <td>{{ $resultat->date_document }}</td>
                    <td>{{ $resultat->Centre->libelle }} - {{ $resultat->Centre->ville }}</td>
                    <td><a href="{{ route('resultats.show', $resultat) }}" class="btn btn-primary">Afficher</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
