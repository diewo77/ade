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
                        <option value="">Choisir un centre</option>
                        @foreach($centres as $centre)
                            <option value="{{ $centre->id }}">{{ $centre->libelle }} - {{ $centre->ville }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="date_document" class="col-sm-2 col-form-label">date_document</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date_document" name="date_document" required placeholder="date_document">
                </div>
            </div>

            <div class="form-group row">
                <label for="date_prelevement" class="col-sm-2 col-form-label">date_prelevement</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date_prelevement" name="date_prelevement" placeholder="date_prelevement">
                </div>
            </div>

            <div class="form-group row">
                <label for="date_passage" class="col-sm-2 col-form-label">date_passage</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date_passage" name="date_passage" placeholder="date_passage">
                </div>
            </div>

            <div class="form-group row">
                <label for="date_lecture" class="col-sm-2 col-form-label">date_lecture</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date_lecture" name="date_lecture" placeholder="date_lecture">
                </div>
            </div>

            <div class="form-group row">
                <label for="nom_preleveur" class="col-sm-2 col-form-label">nom_preleveur</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nom_preleveur" name="nom_preleveur" placeholder="nom_preleveur">
                </div>
            </div>

            <div class="form-group row">
                <label for="passage_par" class="col-sm-2 col-form-label">passage_par</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="passage_par" name="passage_par" placeholder="passage_par">
                </div>
            </div>

            <div class="form-group row">
                <label for="lecture_par" class="col-sm-2 col-form-label">lecture_par</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lecture_par" name="lecture_par" placeholder="lecture_par">
                </div>
            </div>

            <div class="form-group row">
                <label for="confirme_par" class="col-sm-2 col-form-label">confirme_par</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="confirme_par" name="confirme_par" placeholder="nom_preleveur">
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