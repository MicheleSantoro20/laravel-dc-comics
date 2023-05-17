@extends('layouts.app')

@section('page-title')
Comic: {{$fumetto->title}}
@endsection

@section('content')


<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{$fumetto->thumb}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h1>Id: {{$fumetto->id}}</h1>
                <h3 class="card-title">Titolo: {{$fumetto->title}}</h3>
                <h4 class="card-title">Serie: {{$fumetto->series}}</h4>
                <h4 class="card-title">Tipo: {{$fumetto->type}}</h4>
                <p class="card-text">Descrizione: {{$fumetto->description}}</p>
                <h4 class="card-title">Data messa in vendita: {{$fumetto->sale_date}}</h4>
                <h4 class="card-title">Prezzo: {{$fumetto->price}}€</h4>
                <a href="{{route('comics.index')}}" class="btn btn-danger">BACK TO LIST</a>
            </div>
        </div>
    </div>
</div>

@endsection