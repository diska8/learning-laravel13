<?php

namespace App\Http\Controllers;

use App\Models\Skill; 
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
        $name = "Diska Afiansyah Iqbal";
        $skills = Skill::with('category')->get();
        
        return view('about', compact('name', 'skills'));
    }
}