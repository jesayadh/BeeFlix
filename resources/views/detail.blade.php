@extends('layouts.app')
@section('title',$movie->title)
@section('title',$movie->title)
@section('content')
    <div class="m-3 d-flex justify-content-center">
        <div class="p-2 bd-highlight">
            <img src="{{$movie->photo}}" alt="">
        </div>
        <div class="p-2 flex-fill bd-highlight m-0">
            <h4>{{$movie->title}}</h4>
            @for ($i = 0; $i < $movie->rating; $i++)
              <i class="fas fa-star text-warning"></i>
            @endfor
            <p class="text-justify" >{{$movie->description}}</p>
            <p>kategori: <a href="../category/{{$movie->genre_id}}">{{$movie->genre->name}}</a></p>
        </div> 
        <div class="pr-2 ml-5 w-100 flex-fill bd-highlight">
            <h5>EPISODE</h5>
            <table class="table table-striped mr-5">
                <thead>
                  <tr>
                    <th scope="col">episode</th>
                    <th scope="col">judul</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($episodes as $episode)
                    <tr>
                      <td>episode {{$episode->episode}}</td>
                      <td>:{{$episode->title}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                  {{ $episodes->links() }}
            </nav>
        </div>
    </div>
@endsection