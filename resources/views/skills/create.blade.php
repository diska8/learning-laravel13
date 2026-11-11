@extends('layouts.main')

@section('content')
    <h1>Add New Skill</h1>

    <form action="/skills" method="POST">
        @csrf {{-- This Security Must be Laravel to Form POST --}}
        <div>
            <label for="name">Skill Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <button type="submit">Save Skill</button>
    </form>
    <br>
    <a href="/about"> Back to About Page</a>
@endsection