@extends('layouts.app')

@section('title')Письменники@endsection

@section('content')
    <h1>Письменники</h1><br>
    <div>
        <ul>
            @if($authors)
                @foreach($authors as $author)
                    <li><a href="{{route('one-writer', $author->id)}}" class="nav-link px-2 ">{{$author->name}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
@endsection
