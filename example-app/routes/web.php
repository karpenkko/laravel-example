<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContentController;

Route::get('/', function () {
    return view('main');
});

Route::get('/writers', [ContentController::class, 'all_writers']);

Route::get('/writers/{id}', [ContentController::class, 'one_writer'])->name('one-writer');

Route::get('/books', [ContentController::class, 'all_books']);

Route::get('/books/{id}', [ContentController::class, 'one_book'])->name('one-book');

Route::get('/genres', [ContentController::class, 'all_genres']);

Route::get('/genres/{id}', [ContentController::class, 'one_genre'])->name('one-genre');


