@extends('layouts.app')

@section('title'){{ $author->name }}@endsection

@section('content')
    <h1>{{ $author->name }}</h1><br>
    <p>Книги: </p>
    <div>
        <ul>
            @foreach ($author->book as $book)
                <li><a href="{{route('one-book', $book->id)}}" class="nav-link px-2 ">{{$book->title}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
