<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WriterController;

Route::get('/', function () {
    return view('main');
});

Route::get('/add', [WriterController::class, 'open']);

Route::get('/writers', [WriterController::class, 'show']);

Route::post('/writers/submit', [WriterController::class, 'submit']);

