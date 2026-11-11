<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>About Page</title>
@extends('layouts.main')

@section('content')
    <h1>About {{$name}}</h1>
    <p>I am Junior fullstack developer</p>

    <a href="/skills/create">Add New Skill</a>
    <br><br>

    <h3>My Skills (From Database)</h3>
    <ul>
        @foreach($skills as $skill)
            <li style="margin-bottom: 10px;">
                <strong>{{ $skill->name }}</strong>: {{ $skill->description }}

                <form action="/skills/{{ $skill->id }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this skill?')">Delete</button>
            </li>
        @endforeach
    </ul>
@endsection