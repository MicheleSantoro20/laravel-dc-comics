@extends('layouts.app')

@section('page-title')
destroy page
@endsection


@section('content')
<div class="container">
    <h1>Sei sicuro di voler eliminare la seguente voce?</h1>

    <form action="{{route('Comics.destroy', $object->id)}}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Cancella</button>
    </form>
    <a class="btn btn-info" href="{{route('comics.index')}}"> Torna alla lista</a>
</div>
@endsection