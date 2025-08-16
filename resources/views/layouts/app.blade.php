<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Miaad Al-Farsi | Portfolio</title>
  <meta name="description" content="Miaad Al-Farsi — Software Engineer Portfolio" />
  @vite(['resources/css/app.css','public/js/main.js'])
</head>
<body class="bg-[#0b0616] text-white selection:bg-purple-500/30">
  @include('partials.navbar')
  <main class="px-6 md:px-10">
    @yield('content')
  </main>
  <footer class="mt-24 py-10 text-center text-sm text-zinc-400/80">
    © <span id="y"></span> Miaad Al-Farsi
  </footer>
  <script>
    document.getElementById('y').textContent = new Date().getFullYear();
  </script>
</body>
</html>
