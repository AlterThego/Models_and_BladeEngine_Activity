<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [BookController::class, 'index']);

Route::get('/alt', function () {
    return view('alt');
});

