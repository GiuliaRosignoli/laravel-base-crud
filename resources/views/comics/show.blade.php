@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>{{ $comic->Title }}</h1>
        <div class="mb-5">
            <span class="badge bg-primary">Є: {{ $comic->Price }}</span>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $comic->Image }}" alt="{{ $comic->Title}}">
            </div>
            <div class="col-md-6">
                {!! $comic->Description !!} <!--Insert HTML as well-->
            </div>
        </div> <!--row-->
        <a href="{{ route('comics.index') }}"> Go back from whence you came!</a>
    </div>
@endsection