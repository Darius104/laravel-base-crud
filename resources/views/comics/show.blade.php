@extends('layouts.app')

@section('main_content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navnarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ route('comics.index') }}"> <- Back</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <h5 class="card-title">Prezzo: {{ $comic->price }}</h5>
              <h5 class="card-title">Tipo: {{ $comic->type }}</h5>
              <a href="{{ route('comics.index') }}">{{$comic->title}}</a>
            </div>
        </div>
    </div>

@endsection