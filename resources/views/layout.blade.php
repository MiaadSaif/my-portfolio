<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ $title ?? 'Miaad Portfolio' }}</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <nav class="navbar">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('work') }}">Work</a>
    <a href="{{ route('contact') }}">Contact</a>
  </nav>

  <main class="content">
    @yield('content')
  </main>
</body>
</html>
