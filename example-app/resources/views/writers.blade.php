@extends('layouts.app')

@section('file-title')Письменники@endsection

@section('title')
    <h1>Письменники</h1>
    @if($alist)
        @foreach($alist as ["author" => $author, "book" => $book])
            <p>Автор: {{$author}}</p>
            <p>Книга: {{$book}}</p><br>
        @endforeach
    @endif
@endsection
