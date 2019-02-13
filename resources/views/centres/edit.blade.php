@extends('layouts.base')

@section('title', 'Modification')

@section('content')
    <div class="container">
        <div class="col">
            <h4>Modifié un centre</h4>
        </div>
        <form action="{{ route('centres.update', $centre) }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}

            <div class="form-group row">
                <label for="libelle" class="col-sm-2 col-form-label">Libelle</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="libelle" name="libelle"
                           required placeholder="Libelle" value="{{ $centre->libelle }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="ville" class="col-sm-2 col-form-label">Ville</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ville"
                           value="{{ $centre->ville }}" name="ville" placeholder="Veuillez entré la ville">
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