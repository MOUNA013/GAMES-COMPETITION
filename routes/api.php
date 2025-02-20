<?php

use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Competitions;
use App\Http\Controllers\CompetitionParticController;
use App\Http\Controllers\Games;
use App\Http\Controllers\Users;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/users', [Users::class, 'index']);
Route::get('/users/{id}', [Users::class, 'show']);
Route::post('/users', [Users::class, 'store']);
Route::get('/games', [Games::class, 'index']);
Route::post('/games', [Games::class, 'store']);
Route::get('/games/{id}', [Games::class, 'show']);
Route::get('/competitions', [Competitions::class, 'index']);
Route::get('/competitions/{id}', [Competitions::class, 'show']);
Route::post('/competitions', [Competitions::class, 'store']);
Route::put('/competitions/{id}', [Competitions::class, 'update']);
Route::delete('/competitions/{id}', [Competitions::class, 'destroy']);
Route::get('/participants', [CompetitionParticController::class, 'index']);
Route::post('/competitions/register', [CompetitionParticController::class, 'register']);

