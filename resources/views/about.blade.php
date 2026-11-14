@extends('layouts.main')

@section('content')
    <div class="bg-white rounded-xl shadow-md p-8">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between border-b pb-6 mb-6">
            <div>
                <h1 class="text-3xl font-bold text-slate-900">{{ $name }}</h1>
                <p class="text-slate-500 mt-1">Junior Fullstack Developer</p>
            </div>
            <a href="{{ route('skills.create') }}" class="mt-4 sm:mt-0 inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-5 py-2.5 rounded-lg transition shadow-sm">
                + Add Skill
            </a>
        </div>

        <h2 class="text-lg font-semibold text-slate-700 mb-4">My Skills</h2>

        @if ($skills->isEmpty())
            <p class="text-slate-400 italic text-center py-6">Dont have skill, Add your first Skill!</p>
        @else
            <div class="grid gap-4">
                @foreach ($skills as $skill)
                    <div class="border border-slate-200 rounded-lg p-4 flex flex-col sm:flex-row sm:items-center justify-between hover:border-indigo-300 transition bg-slate-50/50">
                        <div class="mb-3 sm:mb-0">
                            <h3 class="font-bold text-lg text-slate-800">{{ $skill->name }}</h3>
                            <span class="text-xs font-semibold px-2.5 py-0.5 rounded-full bg-indigo-100 text-indigo-700">
                                {{ $skill->category->name ?? 'Without Category'}}
                            </span>
                            <p class="text-slate-600 text-sm mt-0.5">{{ $skill->description }}</p>
                        </div>

                        <div class="flex items-center gap-2 shrink-0">
                            <a href="{{ route('skills.edit', $skill->id) }}" class="bg-amber-100 hover:bg-amber-200 text-amber-800 text-sm font-medium px-3.5 py-1.5 rounded-md transition">
                                Edit
                            </a>

                            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure want to delete this? {{ $skill->name }}?')" class="bg-rose-100 hover:bg-rose-200 text-rose-700 text-sm font-medium px-3.5 py-1.5 rounded-md transition">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection