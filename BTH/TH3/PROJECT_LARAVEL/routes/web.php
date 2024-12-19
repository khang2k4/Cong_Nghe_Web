<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get("/a", [PostController::class, "index"]);
