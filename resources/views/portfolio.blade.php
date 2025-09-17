<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Miaad Portfolio</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- Navbar -->
<div class="navbar-container">
  <nav class="navbar">
    <a href="#about">ABOUT ME</a>
    <a href="#work">EXPERIENCE</a>
    <a href="#projects">PROJECTS</a>
    <a href="#contact">CONTACT ME </a>
  </nav>
</div>


<!-- Hero -->

<section class="hero min-h-screen flex items-center justify-center bg-gray-900 text-white" id="home">
  <div class="hero-content flex flex-col md:flex-row items-center gap-10 max-w-6xl px-6">

    <!-- Image + Arrow -->
    <div class="hero-img-container relative flex flex-col items-center">
      <div class="arrow-text flex items-center gap-3 mb-6">
<span class="text-lg md:text-xl">
  Hello world !
  <span class="highlight text-blue-400 font-semibold" style="font-family: 'Courier New', monospace;">
    I am  Miaad Al-Farsi
  </span>
</span>
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

    </div>
<!-- About -->

<section id="about">
    <div class="about-text text-left space-y-6 max-w-lg">
      <h1 class="text-3xl md:text-5xl font-bold tracking-tight" style="font-family: 'Poppins', sans-serif;">
      </h1>
      <div class="card">
      <p class="text-gray-300 text-sm md:text-base leading-relaxed">
     Full Stack Developer with 2+ years of experience building reliable web & mobile apps
      using <br> <strong>Laravel, Node.js, React, Flutter</strong>.<br> Passionate about clean code,
      real-time systems, and creating user-friendly solutions.
      </p>
      </div>
    </div>
</section>


    </div>
  </div>
</section>
<!-- Technical Skills -->
<section id="skills" class="skills min-h-screen flex items-center justify-center bg-gray-900 text-white">
  <h2 class="section-title">Technical Skills</h2>
  <div class="cards">

    <!-- Frameworks & Libraries -->
    <div class="card skill-card">
      <div class="icon">💻</div>
      <h3>Frameworks / Libraries</h3>
      <p>Laravel, Node.js, React, Flutter, TailwindCSS, Shadcn UI, Bootstrap</p>
    </div>

    <!-- Frontend Languages -->
    <div class="card skill-card">
      <div class="icon">🌐</div>
      <h3>Frontend Languages</h3>
      <p>JavaScript, Dart, PHP</p>
    </div>

    <!-- Backend Languages -->
    <div class="card skill-card">
      <div class="icon">⚙️</div>
      <h3>Backend Languages</h3>
      <p>PHP, JavaScript, Node.js, Go (TUI)</p>
    </div>

    <!-- Frontend Technologies -->
    <div class="card skill-card">
      <div class="icon">🎨</div>
      <h3>Frontend Technologies</h3>
      <p>AJAX, Responsive UI</p>
    </div>

    <!-- Backend Technologies -->
    <div class="card skill-card">
      <div class="icon">🖧</div>
      <h3>Backend Technologies</h3>
      <p>REST APIs, WebSocket, JWT Authentication</p>
    </div>

    <!-- Databases -->
    <div class="card skill-card">
      <div class="icon">🗄️</div>
      <h3>Databases</h3>
      <p>MySQL, PostgreSQL, SQLite, MongoDB</p>
    </div>

    <!-- Tools -->
    <div class="card skill-card">
      <div class="icon">🛠️</div>
      <h3>Tools</h3>
      <p>GitHub, Laragon, Adminer, Swagger, Puppeteer, Docker</p>
    </div>

    <!-- Integrations -->
    <div class="card skill-card">
      <div class="icon">🔗</div>
      <h3>Integrations</h3>
      <p>WhatsApp META API, OpenAI API, BM Payment Gateways, Ministry of Commerce API</p>
    </div>

  </div>
</section>
 <!-- Work Experience -->
<section id="work" class=" min-h-screen flex items-center justify-center bg-gray-900 text-white">
  <h2 class="section-title">Work Experience</h2>
  <div class="cards">
    <div class="card">
      <img src="/CO1.png" alt="Sahalat Logo" style="width: 60px; height: auto; margin-bottom: 10px;">
      <h3>Software Developer - Sahalat</h3>
      <p><strong>Location:</strong> Muscat, Oman</p>
      <p><strong>Duration:</strong> Nov 2022 – Aug 2023</p>
      <ul style="font-family: 'Courier New', monospace;">
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
      <ul style="font-family: 'Courier New', monospace;">
        <li>Created responsive websites using Squarespace.</li>
        <li>Resolved UI/UX issues and implemented custom components.</li>
      </ul>
    </div>

  </div>
</section>
  <!-- Projects -->


<section id="projects" class=" min-h-screen flex items-center justify-center bg-gray-900 text-white">
  <h2 class="section-title">Projects</h2>
  <div class="cards">
    <div class="card project-card" data-id="1" >

      <h3>MUAIN – CRM & Services Management System</h3>
      <span class="status-tag-ongoing">ongoing</span>
      <p>Built using Laravel 8, AJAX, MySQL with Socket notifications, payment integration, and Ministry of Commerce and Industry APIs.</p>
      <span class="has-images">📷 View Images</span>
    </div>

    <div class="card project-card" data-id="2">
      <h3>AI WhatsApp Chatbot (OpenAI)</h3>
      <span class="status-tag-completed">Completed</span>
      <p> Integrated OpenAI API .</p>
      <span class="has-images">📷 View Images</span>

    </div>

    <div class="card project-card" data-id="3">
      <h3>WhatsApp business API</h3>
      <span class="status-tag-completed">Completed</span>
      <p> Built a chatbot to manage WhatsApp Business communication, using in frontend Flutter/Livewire, Laravel (backend).</p>
       <span class="has-images">📷 View Images</span>

    </div>
    <div class="card project-card" data-id="4">
      <h3>Car Rental System</h3>
      <span class="status-tag-completed">Completed</span>
      <p>Frontend built with Flutter and backend using Laravel. Handles bookings, vehicle listings, and management features.</p>
      <span class="has-images">📷 View Images</span>

    </div>

    <div class="card project-card" data-id="5">
      <h3>Virtual Assistant Chatbot</h3>
      <span class="status-tag-ongoing">ongoing</span>
      <p>Automated WhatsApp support chatbot developed using Node.js, Laravel, and Puppeteer.</p>
       <span class="has-images">📷 View Images</span>

    </div>

    <div class="card project-card" data-id="6">
      <h3>URL Shortener CLI Tool</h3>
      <span class="status-tag-completed">Completed</span>
      <p>Command-line tool built with Go, SQLite, and Bubbletea. Features a TUI interface and persistent local storage.</p>
       <span class="has-images">📷 View Images</span>

    </div>

    <div class="card project-card" data-id="7">
      <h3>Automated Git Branch Updater</h3>
      <span class="status-tag-completed">Completed</span>
      <p>Python utility to automatically merge and update Git branches without conflicts.</p>
       <span class="has-images">📷 View Images</span>

    </div>

    <div class="card project-card" data-id="8">
      <h3>Simple E-Commerce Store</h3>
      <span class="status-tag-ongoing">ongoing</span>
      <p>Developed using Next.js and TypeScript with Shadcn UI. Includes product listings and a local cart system.</p>
      <span class="has-images">📷 View Images</span>

    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
  <div class="contact-card">
    <h2 class="contact-title">Contact Me</h2>
    <div class="contact-info">
      <p>Email:
        <a href="mailto:miaad.alfarsi@hotmail.com" class="contact-link">
          miaad.alfarsi@hotmail.com
        </a>
      </p>
      <p>Phone:
        <span class="contact-link">98519577</span>
      </p>
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
  <!-- Fullscreen Image Viewer -->
<div id="imageViewer" onclick="closeImageViewer()">
  <span class="close-image" onclick="closeImageViewer(event)">×</span>
  <img id="viewerImage" src="" alt="Full View">
</div>

</body>
</html>
<!-- JavaScript -->
<script>
document.querySelectorAll('.project-card').forEach(card => {
  card.addEventListener('click', () => {
    const projectId = card.dataset.id;

    fetch(`/project-details/${projectId}`)
      .then(response => {
        if (!response.ok) throw new Error('Backend Development');
        return response.json();
      })
      .then(data => {
        document.getElementById('modal-title').innerText = data.title || "Project Details";
        document.getElementById('modal-desc').innerText = data.desc || "";

        const imagesDiv = document.getElementById('modal-images');
        imagesDiv.innerHTML = "";

        if (data.images && data.images.length > 0) {
          data.images.forEach(src => {
            const img = document.createElement('img');
            img.src = src;
            img.alt = "Project image";
            img.style.width = '150px';
            img.style.margin = '5px';
            img.style.borderRadius = '8px';
            img.style.objectFit = 'cover';
            img.style.cursor = 'pointer';

            // عند الضغط على الصورة -> عرضها في lightbox
            img.addEventListener('click', (e) => {
              e.stopPropagation(); // منع إغلاق المودال عند كليك الصورة
              showImageViewer(src);
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

// فتح نافذة الصورة بالحجم الكامل
function showImageViewer(src) {
  const viewer = document.getElementById('imageViewer');
  const viewerImg = document.getElementById('viewerImage');
  viewerImg.src = src;
  viewer.style.display = 'flex';
}

// إغلاق نافذة الصورة بالحجم الكامل
function closeImageViewer(event) {
  if (!event || event.target.id === "imageViewer" || event.target.classList.contains('close-image')) {
    document.getElementById('imageViewer').style.display = 'none';
  }
}

// إغلاق المودال الأصلي
function closeModal() {
  document.getElementById('projectModal').style.display = 'none';
}
</script>

