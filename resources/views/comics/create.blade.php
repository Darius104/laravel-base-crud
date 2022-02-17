@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h2>crea nuova riga di comic</h2>

            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="titile" name="title">
                </div>
                <br>

                <div class="form-group">
                    <label for="thumb" class="form-label">Url immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <br>

                <div class="form-group">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <br>

                <div class="form-group">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <br>

                <div class="form-group">
                    <label for="sale_date" class="form-label">Data</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                <br>

                <div class="form-group">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <br>

                <div class="form-group">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Submit</button>
                <br>
                <br>
            </form>
        </div>
    </section>
@endsection