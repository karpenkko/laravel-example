@extends('layouts.app')

@section('title'){{ $genre->title }}@endsection

@section('content')
    <h1>{{ $genre->title }}</h1><br>
    <p>Книги: </p>
    <div>
        <ul>
            @foreach ($genre->book as $book)
                <li><a href="{{route('one-book', $book->id)}}" class="nav-link px-2 ">{{$book->title}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
