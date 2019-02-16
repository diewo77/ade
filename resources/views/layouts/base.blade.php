<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADE - @yield('title')</title>
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap/bootstrap.min.css') }}>
    @yield('mycss')
    <style>
        h4 {
            color: orangered;
        }

        table {
            font-size: 1em;
            font-weight: 300;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Gestion de résultat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('resultats.index') }}">Resultats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('centres.index') }}">Centres</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="mt-4">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('content')
</div>
<script src={{ URL::asset('js/jquery-3.3.1.slim.min.js') }}></script>
<script src={{ URL::asset('js/popper.min.js') }}></script>
<script src={{ URL::asset('js/bootstrap/bootstrap.min.js') }}></script>
@yield('myjs')
</body>
</html>