<?php

use Illuminate\Support\Facades\Route;

Route::get('/greeting', function () {
    return "welcome to the learn laravel13 project";
});

Route::get('/user/{name}', function ($name) {
    return "Halo, {name}!";
});

Route::get('/about/', function () {
    return view('about');
});
