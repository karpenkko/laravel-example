@extends('layouts.app')

@section('file-title')Письменник@endsection

@section('title')
    <h1>Новий письменник</h1>
    @if($author && $book)
        <p>Автор: {{$author}}</p>
        <p>Книга: {{$book}}</p>
    @endif
@endsection

