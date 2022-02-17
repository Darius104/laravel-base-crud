@extends('layouts.app')

@section('main_content')
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