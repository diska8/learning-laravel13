<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Category;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return redirect()->route('about');
    }

    public function create()
    {
        $categories = Category::all();
        return view('skills.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'description' => 'required',
        ]);

        Skill::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('about')->with('success', 'New Skill created successfully!');
    }

    public function edit($id)
    {
       $skill = Skill::findOrFail($id);
       $categories = Category::all();

        return view('skills.edit', compact('skill', 'categories')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'description' => 'required',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
        ]);
        
        return redirect()->route('about')->with('success', 'Data skill success to Update!');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('about')->with('success', 'Skill deleted successfully!');
    }
}
