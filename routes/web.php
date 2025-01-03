<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route de base
Route::get('/', function () {
    echo json_encode(['message' => 'Welcome to the API']);
});

