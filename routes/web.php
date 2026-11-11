<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PageController;

Route::get('/greeting', [PageController::class, 'greeting']);

Route::get('/user/{name}', [PageController::class, 'user']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/skills/create', [PageController::class, 'create']);

Route::post('/skills', [PageController::class, 'store']);

Route::delete('/skills/{id}', [PageController::class, 'destroy']);

Route::get('/skills/{id}/edit', [PageController::class, 'edit']);

Route::put('/skills/{id}', [PageController::class, 'update']);