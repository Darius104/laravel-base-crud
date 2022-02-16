@extends('layouts.app')

@section('main_content')
    <h1>Lista di fumetti</h1>

    @foreach ($comics as $element)
        <div>
            <h2>
                <a href="{{ route('comics.show', ['comic' => $element->id]) }}">{{ $element->title }}</a>
            </h2>
            <span>Prezzo: {{ $element->price }}</span>
        </div>
        <br>
        <br>
    @endforeach
@endsection