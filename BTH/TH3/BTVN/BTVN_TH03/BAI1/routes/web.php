<?php

use App\Http\Controllers\booksController;
use Illuminate\Support\Facades\Route;

Route::get("/", [booksController::class, "index"]);
