@extends('layouts.main')

@section('content')
    <h1>About {{$name}}</h1>
    <p>I am Junior fullstack developer</p>

    <a href="{{ route('skills.create') }}">+ Add New Skill</a>
    <br><br>

    <h3>My Skills (From Database)</h3>
    <ul>
        @foreach($skills as $skill)
            <li style="margin-bottom: 10px;">
                <strong>{{ $skill->name }}</strong>: {{ $skill->description }}

                <a href="{{ route('skills.edit', $skill->id) }}">Edit</a> |

                <form action="{{route('skills.destroy', $skill->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this skill?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection