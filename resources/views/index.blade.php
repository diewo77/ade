@extends('layouts.base')

@section('title', 'Page Title')

@section('content')
    <div class="container">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h4>Bienvenus</h4>
            </div>
        </div>
        <div class="row col">
            <p>On est le: {{ Carbon\Carbon::now()->format('d-m-Y H:m') }}</p>
        </div>


    </div>

    <div id="app"></div>
@endsection

@section('myjs')
    <script src={{ URL::asset('js/app.js') }}></script>
@endsection
