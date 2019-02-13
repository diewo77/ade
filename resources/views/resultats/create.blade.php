@extends('layouts.base')

@section('title', 'Ajouté un centre')

@section('content')
    <div class="container">
        <div class="col">
            <h4>Ajouté un centre</h4>
        </div>
        <form action="{{ route('resultats.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="centre_id" class="col-sm-2 col-form-label">Centre</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="centre_id" name="centre_id" required>
                        <option value="">Open this select menu</option>
                        @foreach($centres as $centre)
                            <option value="{{ $centre->id }}">{{ $centre->libelle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="libelle" class="col-sm-2 col-form-label">Libelle</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="libelle" name="libelle" required placeholder="Libelle">
                </div>
            </div>

            <div class="form-group row">
                <label for="ville" class="col-sm-2 col-form-label">Ville</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ville" name="ville" placeholder="Veuillez entré la ville">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Validé</button>
                </div>
            </div>
        </form>
    </div>
@endsection