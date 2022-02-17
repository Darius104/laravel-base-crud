@extends('layouts.app')

@section('main_content')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navnarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ route('comics.create') }}"> + New Comic</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
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