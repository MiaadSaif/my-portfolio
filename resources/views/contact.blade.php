<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
</head>
<body>
    <h1>Contact Me</h1>
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About Me</a> |
        <a href="/projects">Projects</a> |
        <a href="/contact">Contact</a>
    </nav>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/contact">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Message:</label><br>
        <textarea name="message" required></textarea><br><br>

        <button type="submit">Send</button>
    </form>
</body>
</html>
