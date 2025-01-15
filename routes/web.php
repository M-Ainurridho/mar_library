<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, ("index")])->name('home.index');

// books
Route::resource("/books", BookController::class);
