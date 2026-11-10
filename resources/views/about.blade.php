<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>About Page</title>
@extends('layouts.main')

@section('content')
    <h1>About {{$name}}</h1>
    <p>I am Junior fullstack developer</p>

    <h3>My Skills</h3>
    <ul>
        @foreach($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
@endsection