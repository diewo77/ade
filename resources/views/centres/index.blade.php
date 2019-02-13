@extends('layouts.base')

@section('title', 'Liste des centres')

@section('content')
    <div class="container">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h4>Liste des centres</h4>
            </div>
            <div class="col text-right">
                <a class="btn btn-primary" href="{{ route('centres.create') }}">Ajouter</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Ville</th>
                <th scope="col">Modifié</th>
            </tr>
            </thead>
            <tbody>
            @foreach($centres as $centre)
                <tr>
                    <th scope="row">{{ $centre->id }}</th>
                    <td>{{ $centre->libelle }}</td>
                    <td>{{ $centre->ville }}</td>
                    <td><a href="{{ route('centres.edit', $centre) }}" class="btn btn-primary">Modifier</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
