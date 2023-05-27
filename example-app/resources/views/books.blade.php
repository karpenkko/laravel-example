@extends('layouts.app')

@section('title')Книжки@endsection

@section('content')
    <h1>Книжки</h1><br>
    <div>
        <ul>
            @if($books)
                @foreach($books as $book)
                    <li><a href="{{route('one-book', $book->id)}}" class="nav-link px-2 ">{{$book->title}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
@endsection
