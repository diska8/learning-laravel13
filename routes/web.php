<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PageController;
use App\Http\Controllers\SkillController;

Route::redirect('/', '/about');
Route::get('/greeting', [PageController::class, 'greeting']);
Route::get('/user/{name}', [PageController::class, 'user']);
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::resource('skills', SkillController::class);
