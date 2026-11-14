@extends('layouts.main')

@section('content')
    <div class="bg-white rounded-xl shadow-md p-8 max-w-xl mx-auto">
        <h1 class="text-2xl font-bold text-slate-900 mb-6">Add new skill</h1>

        <form action="{{ route('skills.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Name Skill</label>
                <input type="text" id="name" name="name" placeholder="Example: Laravel" required
                    class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-slate-700 mb-1">Deskription</label>
                <textarea id="description" name="description" rows="3" placeholder="Explain your experience skill in this description" required
                    class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>

            <div class="flex items-center gap-3 pt-2">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-5 py-2 rounded-lg transition">
                    Save skill
                </button>
                <a href="{{ route('about') }}" class="text-slate-600 hover:text-slate-900 text-sm font-medium px-4 py-2">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection