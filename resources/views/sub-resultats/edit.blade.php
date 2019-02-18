@extends('layouts.base')

@section('title', 'Modifier une entrée')

@section('mycss')
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap/bootstrap-datepicker.min.css') }}>
@endsection

@section('content')
    <div class="container">
        <div class="col">
            <h4>Modifier l'entrée au résultat N°: {{ $subResultat->Resultat->id }}
                du {{ $subResultat->Resultat->date_document->format('d-m-Y') }}</h4>
        </div>
        <form action="{{ route('sub-resultats.update', $subResultat) }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}

            <div class="form-group row">
                <label for="date_reception" class="col-sm-2 col-form-label">Date de reception</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control datepicker" id="date_reception" name="date_reception" required
                           placeholder="date_reception" value="{{$subResultat->date_reception->format('d-m-Y')}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="code" class="col-sm-2 col-form-label">code</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="code" name="code" placeholder="code" value="{{$subResultat->code}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="adresse" class="col-sm-2 col-form-label">adresse</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" value="{{$subResultat->adresse}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="result_1" class="col-sm-2 col-form-label">CL<sub>2</sub></label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="result_1" name="result_1" placeholder="mg/l" value="{{$subResultat->result_1}}">
                </div>
                <div class="col-sm-3 custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="valid_1" name="valid_1" value="1"
                           @if ($subResultat->valid_1 === 1)
                               checked
                           @endif
                    >
                    <label class="custom-control-label" for="valid_1">mg/l - Résultat valide ?</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="result_2" class="col-sm-2 col-form-label">GT 37°C (<=20/ml)</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="result_2" name="result_2" placeholder="<=20/ml" value="{{$subResultat->result_2}}">
                </div>
                <div class="col-sm-3 custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="valid_2" name="valid_2" value="1"
                           @if ($subResultat->valid_2 === 1)
                               checked
                           @endif
                    >
                    <label class="custom-control-label" for="valid_2"><=20/ml - Résultat valide ?</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="result_3" class="col-sm-2 col-form-label">GT 22°C</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="result_3" name="result_3" placeholder="<= 100/ml" value="{{$subResultat->result_3}}">
                </div>
                <div class="col-sm-3 custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="valid_3" name="valid_3" value="1"
                           @if ($subResultat->valid_3 === 1)
                               checked
                           @endif
                    >
                    <label class="custom-control-label" for="valid_3"><= 100/ml - Résultat valide ?</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="result_4" class="col-sm-2 col-form-label">C.T 37°C</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="result_4" name="result_4" placeholder="< 10/100 ml" value="{{$subResultat->result_4}}">
                </div>
                <div class="col-sm-3 custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="valid_4" name="valid_4" value="1"
                           @if ($subResultat->valid_4 === 1)
                               checked
                           @endif
                    >
                    <label class="custom-control-label" for="valid_4"><10/100 ml - Résultat valide ?</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="result_5" class="col-sm-2 col-form-label">C.F 44°C</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="result_5" name="result_5" placeholder="00/100 ml" value="{{$subResultat->result_5}}">
                </div>
                <div class="col-sm-3 custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="valid_5" name="valid_5" value="1"
                           @if ($subResultat->valid_5 === 1)
                               checked
                           @endif
                    >
                    <label class="custom-control-label" for="valid_5">00/100 ml - Résultat valide ?</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="result_6" class="col-sm-2 col-form-label">S.F 37°C</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="result_6" name="result_6" placeholder="00/100 ml" value="{{$subResultat->result_6}}">
                </div>
                <div class="col-sm-3 custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="valid_6" name="valid_6" value="1"
                           @if ($subResultat->valid_6 === 1)
                               checked
                           @endif
                    >
                    <label class="custom-control-label" for="valid_6">00/100 ml - Résultat valide ?</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="result_7" class="col-sm-2 col-form-label">Clost 37°C</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="result_7" name="result_7" placeholder="00/100 ml" value="{{$subResultat->result_7}}">
                </div>
                <div class="col-sm-3 custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="valid_7" name="valid_7" value="1"
                           @if ($subResultat->valid_7 === 1)
                               checked
                           @endif
                    >
                    <label class="custom-control-label" for="valid_7">00/100 ml - Résultat valide ?</label>
                </div>
            </div>

            <div class="form-group row">
                <label for="code" class="col-sm-2 col-form-label">OBS</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="obs" id="obs" cols="10" rows="3"
                              placeholder="Observation">{{$subResultat->obs}}</textarea>
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