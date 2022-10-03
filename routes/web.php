<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembresController;
use App\Http\Controllers\GenreControllerController;

Route::resource('/genre', GenreControllerController::class);

Route::resource('/membres', MembresController::class);


