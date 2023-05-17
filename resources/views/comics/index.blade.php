@extends('layouts.app')

@section('page-title','Lista Comics')

@section('content')
<div class="container">
    <a href="{{route('comics.create')}}" class="btn btn-info">Crea nuovo Elemento</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo (€)</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fumetto as $comic)
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">SHOW</a>
                    <a href="{{route('comics.delete', $comic->id)}}" class="btn btn-DANGER">DELETE</a>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection