<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>
<body>
    <h1>Projects</h1>
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About Me</a> |
        <a href="/projects">Projects</a> |
        <a href="/contact">Contact</a>
    </nav>

    <ul>
        @foreach($projects as $project)
            <li>
                <strong>{{ $project['title'] }}</strong><br>
                {{ $project['description'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
