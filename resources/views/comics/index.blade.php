@extends('layouts.app')

@section('main_content')
    <h1>Lista di fumetti</h1>
    <br>
    <br>
    @foreach ($comics as $element)
        <div>
            <h2>
                <a href="{{ route('comics.show', ['comic' => $element->id]) }}">{{ $element->title }}</a>
            </h2>
        </div>
        <br>
        <br>
    @endforeach
@endsection