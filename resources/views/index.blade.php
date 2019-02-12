@extends('layouts.base')

@section('title', 'Page Title')

@section('content')
    <div class="container">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h4>Catégorie</h4>
            </div>
            <div class="col text-right">
                <a class="btn btn-primary" href="{{ route('index') }}">Ajouter</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Libelle</th>
                <th scope="col">Type</th>
                <th scope="col">Modifier</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Yep</td>
                    <td>Yo !</td>

                    <td><a href="{{ route('index') }}" class="btn btn-primary">Modifier</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
