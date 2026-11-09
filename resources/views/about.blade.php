<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Page</title>
</head>
<body>
    <h1>About Me</h1>
    <p>I am Junior fullstack developer</p>

    <h3>My Skills</h3>
    <ul>
        @foreach($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
</body>
</html>