@extends('layouts.app')

@section('title'){{ $book->title }}@endsection

@section('content')
    <h1>{{ $book->title }}</h1><br>
    <p><strong>Автор:</strong> <a href="{{route('one-writer', $book->author_id)}}" class="nav-link"> {{ $book->author->name }}</a></p>
    <div class="row">
        <div class="col-8">
            <p> {{ $book->description }}</p>
        </div>
    </div>

    <div>
        <p><strong>Жанри:</strong></p>
        <ul>
            @foreach ($book->genre as $genre)
                <li><a href="{{route('one-genre', $genre->id)}}" class="nav-link px-2 ">{{$genre->title}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
