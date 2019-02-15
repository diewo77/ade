@extends('layouts.base')

@section('title', 'Liste des résultats')

@section('content')
    <div class="container">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h4>Résultat N°: {{ $resultat->id }} du {{ $resultat->date_document->format('d-m-Y') }}</h4>
            </div>
            <div class="col text-right">
                <a class="btn btn-primary" href="{{ route('sub-resultats.create', $resultat) }}">Ajouter un sous résultat</a>
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
            @foreach($subResultats as $subResultat)
                <tr>
                    <th scope="row">{{ $subResultat->id }}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
