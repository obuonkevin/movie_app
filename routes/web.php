<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\TvController;



Route::get('/', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);



Route::get('/tv', [TvController::class, 'index']);
Route::get('/tv/{id}', [TvController::class, 'show']);

Route::get('/actors', [ActorsController::class, 'index']);
Route::get('/actors/page/{page?}', [ActorsController::class, 'index']);

Route::get('/actors/{id}', [ActorsController::class, 'show']);




