@extends('layouts.app')

@section('page-title')
Add Element
@endsection

@section('content')
<div class="container">
<form method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$comic->title}}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{$comic->description}}">
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">URL dell'immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{$comic->thumb}}">
            @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo del prodotto</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{$comic->price}}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Nome della serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{$comic->series}}">
            @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data inizio vendita</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{$comic->type}}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>

@endsection