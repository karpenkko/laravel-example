@extends('layouts.app')

@section('title')Письменники@endsection

@section('content')
    <h1>Письменники</h1><br>
    @if($data)
        @foreach($data as $a)
            <p>{{$a}}</p>
        @endforeach
    @endif
@endsection
