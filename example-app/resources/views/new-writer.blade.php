@extends('layouts.app')

@section('title')Письменник@endsection

@section('content')
    <h1>Новий письменник</h1>
    @if($author && $book)
        <p>Автор: {{$author}}</p>
        <p>Книга: {{$book}}</p>
    @endif
@endsection

