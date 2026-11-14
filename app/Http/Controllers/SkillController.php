<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return redirect('/about');
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

        return redirect()->route('about')->with('success', 'Skill created successfully!');
    }

    public function edit($id)
    {
       $skill = Skill::findOrFail($id);
        return view('skills.edit', compact('skill')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        
        return redirect()->route('about')->with('success', 'Skill updated successfully!');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('about')->with('success', 'Skill deleted successfully!');
    }
}
