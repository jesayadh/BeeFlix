@extends('layouts.app')
@section('title',$genre->name)

@section('content')
    <div class="container mt-3 mb-4">
        <h3>{{strtoupper($genre->name)}}</h3>
        <div class="container-fluid pl-0 pr-0">
            @foreach ($genre->movies as $movie)
                <div class="card">
                    <img src="{{$movie->photo}}" class="card-img-top" alt="...">
                    <h6 class="m-3">{{$movie->title}}</h6>
                    <a href="/movies/{{$movie->id}}" class="btn btn-secondary btn-sm btn-lg btn-block">LIHAT FILM</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection