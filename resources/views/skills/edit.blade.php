@extends('layouts.main')

@section('content')
    <h1>Edit Skill</h1>

    <form action="/skills/{{ $skill->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Skill Name:</label><br>
            <input type="text" name="name" id="name" value="{{ $skill->name }}" required>
        </div>
        <br>
        <div>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" required>{{ $skill->description }}</textarea>
        </div>
        <br>
        <button type="submit">Update Skill</button>
    </form>
    <br>
    <a href="/about">Cancel</a>
@endsection