<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PageController;

Route::get('/greeting', [PageController::class, 'greeting']);

Route::get('/user/{name}', [PageController::class, 'user']);

Route::get('/about', [PageController::class, 'about']);
