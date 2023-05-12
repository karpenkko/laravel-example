@extends('layouts.app')

@section('title')Форма@endsection

@section('content')
    <h1>Додавання письменників</h1>

    <div class="row g-5">
        <div class="col-md-7 col-lg-8">
            @if($errors->any())
                <div>
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/writers/submit" method="post" class="needs-validation" novalidate="">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Ім'я</label>
                        <input type="text" name="author" class="form-control" id="author" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Назва книги</label>
                        <input type="text" name="book" class="form-control" id="book" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Відправити</button>
            </form>
        </div>
    </div>
@endsection
