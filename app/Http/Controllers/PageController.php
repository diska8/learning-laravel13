<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function greeting()
    {
        return "welcome to the learn laravel13 project";
    }

    public function user($name)
    {
        return "Halo, {$name}!";
    }

    public function about()
    {
        return view('about');
    }
}