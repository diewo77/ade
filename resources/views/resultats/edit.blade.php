@extends('layouts.base')

@section('title', 'Modifier un résultat')

@section('mycss')
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap/bootstrap-datepicker.min.css') }}>
@endsection

@section('content')
    <div class="container">
        <div class="col">
            <h4>Modifier le résultat N°: {{ $resultat->id }} du {{ $resultat->date_document->format('d-m-Y') }}</h4>
        </div>
        <form action="{{ route('resultats.update', $resultat) }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}
            <div class="form-group row">
                <label for="centre_id" class="col-sm-2 col-form-label">Centre</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="centre_id" name="centre_id" required>
                        <option value="">Choisir un centre</option>
                        @foreach($centres as $centre)
                            <option value="{{ $centre->id }}"
                                    @if($resultat->centre_id === $centre->id)
                                    selected
                                    @endif
                            >{{ $centre->libelle }} - {{ $centre->ville }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="date_document" class="col-sm-2 col-form-label">date_document</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control datepicker" id="date_document" name="date_document" required
                           placeholder="date_document" value="{{$resultat->date_document ? $resultat->date_document->format('d-m-Y') : null}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="date_prelevement" class="col-sm-2 col-form-label">date_prelevement</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control datepicker" id="date_prelevement" name="date_prelevement"
                           placeholder="date_prelevement" value="{{$resultat->date_prelevement ? $resultat->date_prelevement->format('d-m-Y') : null}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="date_passage" class="col-sm-2 col-form-label">date_passage</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control datepicker" id="date_passage" name="date_passage"
                           placeholder="date_passage" value="{{$resultat->date_passage ? $resultat->date_passage->format('d-m-Y') : null}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="date_lecture" class="col-sm-2 col-form-label">date_lecture</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control datepicker" id="date_lecture" name="date_lecture"
                           placeholder="date_lecture" value="{{$resultat->date_lecture ? $resultat->date_lecture->format('d-m-Y') : null}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="nom_preleveur" class="col-sm-2 col-form-label">nom_preleveur</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nom_preleveur" name="nom_preleveur"
                           placeholder="nom_preleveur" value="{{$resultat->nom_preleveur}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="passage_par" class="col-sm-2 col-form-label">passage_par</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="passage_par" name="passage_par"
                           placeholder="passage_par" value="{{$resultat->passage_par}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="lecture_par" class="col-sm-2 col-form-label">lecture_par</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lecture_par" name="lecture_par"
                           placeholder="lecture_par" value="{{$resultat->lecture_par}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="confirme_par" class="col-sm-2 col-form-label">confirme_par</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="confirme_par" name="confirme_par"
                           placeholder="nom_preleveur" value="{{$resultat->nom_preleveur}}">
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

@section('myjs')
    <script src={{ URL::asset('js/bootstrap/bootstrap-datepicker.min.js') }}></script>
    <script src={{ URL::asset('js/bootstrap/bootstrap-datepicker.fr.js') }}></script>
    <script>
        $('.datepicker').datepicker({
            language: 'fr',
            autoclose: true,
            todayHighlight: true,
            format: "dd-mm-yyyy",
        });
    </script>
@endsection
