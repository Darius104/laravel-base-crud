@extends('layouts.app')

@section('main_content')
    <img src="{{ $comic->thumb }}" alt="">  
    <h1>
        <a href="{{ route('comics.index') }}">{{$comic->title}}</a>
    </h1>
    
@endsection