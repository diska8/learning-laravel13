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
        $skills = Skill::all();
        
        return view('about', compact('name', 'skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Skill::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/about');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect('/about');
    }
}