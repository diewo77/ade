@extends('layouts.base')

@section('title', 'Liste des résultats')

@section('content')
    <div class="container">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h4>Résultat N°: {{ $resultat->id }} du {{ $resultat->date_document->format('d-m-Y') }}</h4>
            </div>
            <div class="col text-right">
                <a class="btn btn-primary" href="{{ route('sub-resultats.create', $resultat) }}">Ajouter un sous
                    résultat</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Résultat du</th>
                <th scope="col">Code</th>
                <th scope="col">Imprimer</th>
                <th scope="col">Modifier</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subResultats as $subResultat)
                <tr>
                    <th scope="row">{{ $subResultat->id }}</th>
                    <td>{{ $subResultat->date_reception->format('d-m-Y') }}</td>
                    <td>{{ $subResultat->code }}</td>
                    <td>
                        @if($subResultat->valid_1 === 1 && $subResultat->valid_2 === 1 && $subResultat->valid_3 === 1 && $subResultat->valid_4 === 1
                                && $subResultat->valid_5 === 1 && $subResultat->valid_6 === 1 && $subResultat->valid_7)
                            <a href="{{ route('resultats.show', $resultat) }}" class="btn btn-primary">Conformité</a>
                        @else
                            <a href="{{ route('resultats.show', $resultat) }}" class="btn btn-primary">Non
                                Confirmité</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('sub-resultats.edit', $subResultat) }}" class="btn btn-primary">Modifier</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <form action="{{ route('resultats.destroy', $resultat) }}" method="POST" class="form-inline">
            @csrf
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit">Supprimer le résultat</button>
        </form>
    </div>
@endsection
