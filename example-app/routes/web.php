<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WriterController;

Route::get('/', function () {
    return view('main');
});

Route::get('/add', [WriterController::class, 'open']);

Route::get('/writers', [WriterController::class, 'show_all']);

Route::get('/writers/{writer_id}', [WriterController::class, 'show_one']);

Route::post('/writers/submit', [WriterController::class, 'submit']);

