@extends('layouts.app')

@section('file-title')Форма@endsection

@section('title')
    <h1>Додавання письменників</h1>

    @if($errors->any())
    <div>
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>
    @endif

    <form action="/writers/submit" method="post">
        @csrf
        <input type="text" name="author" placeholder="Ім'я" id="author">
        <input type="text" name="book" placeholder="Назва книги" id="bool">
        <button type="submit">Відправити</button>
    </form>
@endsection
