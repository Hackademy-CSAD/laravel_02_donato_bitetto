<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;



Route::get('/film', [MovieController::class,'index'])->name('movies.index');

//rotte parametriche
Route::get('/movie/{title}', [MovieController::class, 'show'])->name('movies.show');