<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Miaad Portfolio</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <a href="#about">About</a>
    <a href="#work">Experience</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>

<!-- Hero -->

<section class="hero min-h-screen flex items-center justify-center bg-gray-900 text-white" id="home">
  <div class="hero-content flex flex-col md:flex-row items-center gap-10 max-w-6xl px-6">

    <!-- Image + Arrow -->
    <div class="hero-img-container relative flex flex-col items-center">
      <div class="arrow-text flex items-center gap-3 mb-6">
        <span class="text-lg md:text-xl">Hello! I am <span class="highlight text-blue-400 font-semibold">Miaad Al-Farsi</span></span>
        <img src="{{ asset('AR.png') }}" alt="Arrow" class="arrow-img w-8 h-8 animate-bounce">
      </div>
      <img src="{{ asset('miaad.png') }}" alt="Miaad Al-Farsi" class="hero-img w-56 md:w-72 rounded-2xl shadow-lg">
    </div>

    <!-- Tagline -->
    <div class="hero-tagline text-center md:text-left space-y-4">
      <p class="text-lg text-gray-300"></p>
      <h1 class="text-4xl md:text-5xl font-bold">
     <span class="cover-word text-blue-400"> A Software Developer</span>
      </h1>
<!-- About -->

<section id="about">
  <div class="card">
    <h2 class="section-title">About Me</h2>
    <p>
      Full Stack Developer with 2+ years of experience building reliable web & mobile apps
      using <strong>Laravel, Node.js, React, Flutter</strong>. Passionate about clean code,
      real-time systems, and creating user-friendly solutions.
    </p>
  </div>
</section>

      <!-- CTA buttons -->
     {{--  <div class="flex justify-center md:justify-start gap-4 mt-6">
        <a href="#projects" class="px-6 py-3 bg-blue-500 hover:bg-blue-600 rounded-lg font-medium shadow-lg">🚀 View My Work</a>
        <a href="#contact" class="px-6 py-3 bg-gray-700 hover:bg-gray-800 rounded-lg font-medium">📩 Contact Me</a>
      </div> --}}
    </div>
  </div>
</section>

 <!-- Work Experience -->
<section id="work">
  <h2 class="section-title">Work Experience</h2>
  <div class="cards">

    <div class="card">
      <img src="/CO1.png" alt="Sahalat Logo" style="width: 60px; height: auto; margin-bottom: 10px;">
      <h3>Software Developer - Sahalat</h3>
      <p><strong>Location:</strong> Muscat, Oman</p>
      <p><strong>Duration:</strong> Nov 2022 – Aug 2023</p>
      <ul>
        <li>Delivered real-time systems using Laravel, Node.js, and Flutter.</li>
        <li>Developed an AI-powered WhatsApp chatbot, reducing response time by 60%.</li>
        <li>Integrated payment gateways, WebSockets, and RESTful APIs.</li>
        <li>Authored Swagger API documentation and managed testing/deployment pipelines.</li>
      </ul>
    </div>

    <div class="card">
      <img src="/CO2.png" alt="Innotech Logo" style="width: 60px; height: auto; margin-bottom: 10px;">
      <h3>Part-Time Software Developer - Innotech</h3>
      <p><strong>Location:</strong> Remote</p>
      <p><strong>Duration:</strong> Jan 2022 – Aug 2022</p>
      <ul>
        <li>Created responsive websites using Squarespace.</li>
        <li>Resolved UI/UX issues and implemented custom components.</li>
      </ul>
    </div>

  </div>
</section>



  <!-- Projects -->
<section id="projects">
  <h2 class="section-title">Projects</h2>
  <div class="cards">
   {{--  @foreach($projects as $proj)
      <div class="card project-card" data-id="{{ $proj['id'] }}">
        <h3>{{ $proj['title'] }}</h3>
        <p>{{ $proj['desc'] }}</p>
      </div>
    @endforeach --}}

    <!-- Static project entries (from CV) -->
    <div class="card project-card" data-id="1" >
      <h3>MUAIN – CRM & Services Management System</h3>
      <p>Built using Laravel 8, AJAX, MySQL with Socket notifications, payment integration, and Ministry of Commerce and Industry APIs.</p>
    </div>

    <div class="card project-card" data-id="2">
      <h3>AI WhatsApp Chatbot (OpenAI)</h3>
      <p> Integrated OpenAI API .</p>
    </div>

    <div class="card project-card" data-id="3">
      <h3>WhatsApp business API</h3>
      <p> Built a chatbot to manage WhatsApp Business communication, using in frontend Flutter/Livewire, Laravel (backend).</p>
    </div>
    <div class="card project-card" data-id="4">
      <h3>Car Rental System</h3>
      <p>Frontend built with Flutter and backend using Laravel. Handles bookings, vehicle listings, and management features.</p>
    </div>

    <div class="card project-card" data-id="5">
      <h3>Virtual Assistant Chatbot</h3>
      <p>Automated WhatsApp support chatbot developed using Node.js, Laravel, and Puppeteer.</p>
    </div>

    <div class="card project-card" data-id="6">
      <h3>URL Shortener CLI Tool</h3>
      <p>Command-line tool built with Go, SQLite, and Bubbletea. Features a TUI interface and persistent local storage.</p>
    </div>

    <div class="card project-card" data-id="7">
      <h3>Automated Git Branch Updater</h3>
      <p>Python utility to automatically merge and update Git branches without conflicts.</p>
    </div>

    <div class="card project-card" data-id="8">
      <h3>Simple E-Commerce Store</h3>
      <p>Developed using Next.js and TypeScript with Shadcn UI. Includes product listings and a local cart system.</p>
    </div>
  </div>
</section>


<div id="projectModal" class="modal" style="display:none;">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal()" style="cursor:pointer; font-size:24px; position:absolute; top:10px; right:15px;">&times;</span>
    <h3 id="modal-title"></h3>
    <p id="modal-desc"></p>
    <div id="modal-images" style="display:flex; flex-wrap: wrap;"></div>
  </div>
</div>


  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
<!-- JavaScript -->
<script>


document.querySelectorAll('.project-card').forEach(card => {
  card.addEventListener('click', () => {
    const projectId = card.dataset.id;

    fetch(`/project-details/${projectId}`)
      .then(response => {
        if (!response.ok) throw new Error('Project not found');
        return response.json();
      })
      .then(data => {
/*         document.getElementById('modal-desc').innerText = data.desc;
 */
        const imagesDiv = document.getElementById('modal-images');
        imagesDiv.innerHTML = "";

        if (data.images && data.images.length > 0) {
          data.images.forEach(src => {
            const img = document.createElement('img');
            img.src = src;
            img.style.width = '150px';
            img.style.margin = '5px';
            img.style.borderRadius = '8px';
            img.style.objectFit = 'cover';
            img.style.cursor = 'pointer';

            img.addEventListener('click', () => {
              window.open(src, '_blank');
            });

            imagesDiv.appendChild(img);
          });
        }

        document.getElementById('projectModal').style.display = 'flex';
      })
      .catch(err => {
        alert(err.message);
      });
  });
});



function closeModal() {
  document.getElementById('projectModal').style.display = 'none';
}



</script>
