@extends('layouts.app')

@section('title'){{$data['author']}}@endsection

@section('content')
    <h1>{{$data['author']}}</h1><br>
    <p>Книги: </p>
    <div>
        <ul>
            @foreach($data['book'] as $book)
                <li>{{$book}}</li>
            @endforeach
        </ul>
    </div>
@endsection
