@extends('layouts.app')

@section('title')Жанри@endsection

@section('content')
    <h1>Жанри</h1><br>
    <div>
        <ul>
            @if($genres)
                @foreach($genres as $genre)
                    <li><a href="{{route('one-genre', $genre->id)}}" class="nav-link px-2 ">{{$genre->title}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
@endsection
