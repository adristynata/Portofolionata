<x-landing-layout>


    {{-- Navbar --}}
    @include('landing.navbar')
    
   {{-- Hero Section — Navy Theme dengan Slot Foto --}}
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>
  :root {
    --navy-900: #0a0f2c;
    --navy-800: #0d1540;
    --navy-700: #1a2457;
    --navy-600: #1e3a8a;
    --navy-500: #1e40af;
    --navy-400: #3b82f6;
    --navy-300: #60a5fa;
    --navy-200: #93c5fd;
    --navy-100: #dbeafe;
    --navy-50: #eff6ff;
    --navy-accent: #3b82f6;
    --navy-light: #60a5fa;
    --gold: #f59e0b;
    --white: #f8fafc;
    --muted: #94a3b8;
    --sage-50: #f7f9f7;
    --sage-100: #edf2ed;
    --sage-200: #d8e4d8;
    --sage-300: #b8d1b8;
    --sage-400: #8bb88b;
    --sage-500: #6b9e6b;
    --sage-600: #5a855a;
    --sage-700: #4a6b4a;
    --sage-800: #3d573d;
    --sage-900: #334833;
    --lavender-50: #faf7ff;
    --lavender-100: #f3eefe;
    --lavender-200: #e6ddfd;
    --lavender-300: #d4c7fb;
    --lavender-400: #b8a3f5;
    --lavender-500: #9c7eeb;
    --lavender-600: #8b5cf6;
    --lavender-700: #7c3aed;
    --lavender-800: #6d28d9;
    --lavender-900: #5b21b6;
  }
</style>

<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden"
  style="background: linear-gradient(135deg, var(--navy-900) 0%, var(--navy-800) 30%, #1e40af 60%, var(--navy-600) 100%); font-family: 'Inter', sans-serif;">
  {{-- Dot pattern background --}}
  <div class="absolute inset-0"
    style="background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px); background-size: 32px 32px;">
  </div>

  {{-- Glow top-right --}}
  <div class="absolute -top-20 -right-20 w-96 h-96 rounded-full pointer-events-none"
    style="background: radial-gradient(circle, rgba(59,130,246,0.2) 0%, rgba(168,85,247,0.1) 50%, transparent 70%);">
  </div>

  {{-- Glow bottom-left --}}
  <div class="absolute -bottom-16 -left-16 w-72 h-72 rounded-full pointer-events-none"
    style="background: radial-gradient(circle, rgba(245,158,11,0.15) 0%, rgba(34,197,94,0.1) 50%, transparent 70%);">
  </div>

  {{-- Main content --}}
  <div class="relative z-10 max-w-5xl mx-auto px-6 py-20 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

    {{-- === KIRI: Teks === --}}
    <div class="flex flex-col gap-6">

      {{-- Heading --}}
      <h1 class="leading-tight" style="font-family: 'Inter', sans-serif; font-size: clamp(36px, 5vw, 54px); font-weight: 700; color: var(--white);">
        Hai Saya Nata
        <span class="block" style="color: var(--navy-accent);"></span>
      </h1>

      {{-- Deskripsi --}}
      <p class="text-base leading-relaxed" style="color: var(--muted); font-weight: 300;">
        Saya adalah junior web developer SMK Negeri 1 Bangsri yang berfokus pada pengembangan web dan desain antarmuka (UI/UX).
      </p>

      {{-- CTA Buttons --}}
      <div class="flex flex-wrap gap-3">
        <a href="#about"
          class="inline-block px-7 py-3 rounded-lg text-sm font-medium text-white transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg"
          style="background: linear-gradient(135deg, var(--navy-accent) 0%, #7c3aed 100%);">
          Learn More
        </a>
        <a href="#contact"
          class="inline-block px-7 py-3 rounded-lg text-sm font-normal transition-all duration-200 hover:shadow-lg"
          style="color: var(--white); border: 1px solid rgba(255,255,255,0.3);"
          onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.borderColor='rgba(255,255,255,0.6)'"
          onmouseout="this.style.background='transparent'; this.style.borderColor='rgba(255,255,255,0.3)'">
          Contact Me
        </a>
      </div>

      {{-- Stats --}}
      <div class="flex items-center gap-6 pt-2">
        <div class="flex flex-col gap-0.5">
          <span class="text-xl font-bold" style="font-family: 'Inter', sans-serif; color: var(--white);">2</span>
          <span class="text-xs uppercase tracking-widest" style="color: var(--muted);">Projects</span>
        </div>
        <div class="w-px h-9" style="background: rgba(255,255,255,0.12);"></div>
        <div class="flex flex-col gap-0.5">
          <span class="text-xl font-bold" style="font-family: 'Inter', sans-serif; color: var(--white);">2 years</span>
          <span class="text-xs uppercase tracking-widest" style="color: var(--muted);">Experience</span>
        </div>
        <div class="w-px h-9" style="background: rgba(255,255,255,0.12);"></div>
         <div class="flex flex-col gap-0.5">
          <span class="text-xl font-bold" style="font-family: 'Inter', sans-serif; color: var(--white);">5+</span>
          <span class="text-xs uppercase tracking-widest" style="color: var(--muted);">Skill</span>
        </div>    
      </div>

    </div>

    {{-- === KANAN: Foto Profil === --}}
    <div class="flex justify-center">
      <div class="relative w-[min(280px,70vw)] h-[min(340px,85vw)] max-w-full max-h-[400px] mx-auto">

        {{-- Border dekoratif miring --}}
        <div class="absolute inset-0 rounded-2xl"
          style="border: 2px solid rgba(59,130,246,0.4); transform: rotate(3deg);">
        </div>

        {{-- Foto container --}}
        <div class="absolute inset-0 rounded-2xl overflow-hidden"
          style="background: var(--navy-700); border: 1px solid rgba(255,255,255,0.08);">

          {{-- GANTI: taruh foto Anda di sini --}}
           <img src="{{ asset('images/foto-saya.jpg') }}" alt="Foto Saya" class="w-full h-full object-cover"> 

          {{-- Placeholder sementara (hapus setelah foto dipasang) --}}
          <div class="w-full h-full flex flex-col items-center justify-center gap-3">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none"
              stroke="rgba(96,165,250,0.35)" stroke-width="1">
              <circle cx="12" cy="8" r="4"/>
              <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
            </svg>
            <span class="text-xs text-center px-6 leading-relaxed" style="color: var(--muted);">
              Taruh foto Anda<br>di sini
            </span>
          </div>

        </div>

        {{-- Tag chip kiri atas --}}
        <span class="absolute -top-1 sm:-top-3 -left-2 sm:-left-4 text-xs sm:text-sm font-medium px-2 sm:px-3 py-1 rounded-full whitespace-nowrap z-10 shadow-lg"
          style="background: var(--gold); color: #1a1a1a; font-family: 'Inter', sans-serif;">
          Developer
        </span>

        {{-- Tag chip kanan bawah --}}
        <span class="absolute bottom-5 -right-4 text-xs font-medium px-3 py-1 rounded-full"
          style="background: var(--navy-accent); color: #fff; font-family: 'Inter', sans-serif;">
          Hai
        </span>

      </div>
    </div>

  </div>

  {{-- Nav dots dekoratif --}}
  <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-1.5">
    <div class="h-1.5 rounded w-5" style="background: var(--navy-accent);"></div>
    <div class="h-1.5 rounded-full w-1.5" style="background: rgba(255,255,255,0.2);"></div>
    <div class="h-1.5 rounded-full w-1.5" style="background: rgba(255,255,255,0.2);"></div>
  </div>

</section>

    <!-- About Section -->
    <section id="about" class="relative py-24 overflow-hidden bg-white" style="font-family: 'Inter', sans-serif;">

      {{-- Subtle dot pattern --}}
      <div class="absolute inset-0 opacity-30"
        style="background-image: radial-gradient(rgba(10,15,44,0.06) 1px, transparent 1px); background-size: 40px 40px;">
      </div>

      {{-- Soft glow accents --}}
      <div class="absolute top-10 right-10 w-64 h-64 rounded-full pointer-events-none opacity-20"
        style="background: radial-gradient(circle, rgba(59,130,246,0.1) 0%, transparent 70%);">
      </div>
      <div class="absolute bottom-10 left-10 w-48 h-48 rounded-full pointer-events-none opacity-15"
        style="background: radial-gradient(circle, rgba(245,158,11,0.08) 0%, transparent 70%);">
      </div>

      <div class="relative z-10 max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold mb-4" style="font-family: 'Inter', sans-serif; color: var(--navy-900);">
            About Me
          </h2>
          <div class="w-24 h-1 mx-auto rounded-full mb-4" style="background: var(--navy-accent);"></div>
          <p class="text-lg" style="color: var(--navy-700);">
            Get to know more about my journey and passion
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

          {{-- Foto Profil --}}
          <div class="order-2 lg:order-1 flex justify-center">
            <div class="relative">
              <div class="w-80 h-80 rounded-2xl overflow-hidden shadow-2xl"
                style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%); border: 3px solid rgba(59,130,246,0.2);">

                {{-- Placeholder foto --}}
                <div class="w-full h-full flex flex-col items-center justify-center gap-4">
                  <img src="{{ asset('images/foto-saya.jpg') }}" alt="Foto Saya" class="w-full h-full object-cover">
                  <span class="text-sm text-center px-8 leading-relaxed" style="color: var(--navy-700); font-weight: 500;">
                  </span>
                </div>

              </div>

              {{-- Floating elements --}}
              <div class="absolute -top-4 -right-4 w-12 h-12 rounded-full flex items-center justify-center shadow-lg animate-pulse"
                style="background: var(--gold);">
                <span class="text-white font-bold text-lg">👋</span>
              </div>
              <div class="absolute -bottom-4 -left-4 px-4 py-2 rounded-full shadow-lg"
                style="background: linear-gradient(135deg, var(--navy-accent) 0%, rgba(59,130,246,0.8) 100%); color: white; font-size: 12px; font-weight: 600;">
                Web Developer
              </div>
            </div>
          </div>

          {{-- Konten Teks --}}
          <div class="order-1 lg:order-2 space-y-6">

            <div>
              <h3 class="text-3xl font-bold mb-3" style="font-family: 'Inter', sans-serif; color: var(--navy-900);">
                Hi, I'm Nata
              </h3>
              <p class="text-lg leading-relaxed" style="color: var(--navy-700);">
                Saya adalah junior web developer dari SMK Negeri 1 Bangsri yang passionate dalam menciptakan pengalaman digital yang menarik dan fungsional.
              </p>
            </div>

            <div class="space-y-4">
              <p class="text-base leading-relaxed" style="color: var(--navy-600);">
                Dengan fokus pada pengembangan web modern dan desain UI/UX, saya senang mengubah ide-ide kreatif menjadi realitas melalui kode yang bersih dan efisien.
              </p>
              <p class="text-base leading-relaxed" style="color: var(--navy-600);">
                Saya percaya bahwa teknologi harus mudah diakses dan memberikan nilai nyata bagi pengguna.
              </p>
            </div>

            {{-- Stats Cards --}}
            <div class="grid grid-cols-3 gap-4 pt-4">
              <div class="text-center p-4 rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-lg"
                style="background: linear-gradient(135deg, rgba(59,130,246,0.1) 0%, rgba(168,85,247,0.05) 100%); border: 1px solid rgba(59,130,246,0.2);">
                <div class="text-2xl font-bold mb-1" style="color: var(--navy-accent);">2</div>
                <div class="text-sm font-medium" style="color: var(--navy-700);">Projects</div>
              </div>
              <div class="text-center p-4 rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-lg"
                style="background: linear-gradient(135deg, rgba(245,158,11,0.1) 0%, rgba(34,197,94,0.05) 100%); border: 1px solid rgba(245,158,11,0.2);">
                <div class="text-2xl font-bold mb-1" style="color: var(--gold);">2</div>
                <div class="text-sm font-medium" style="color: var(--navy-700);">Years</div>
              </div>
              <div class="text-center p-4 rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-lg"
                style="background: linear-gradient(135deg, rgba(59,130,246,0.1) 0%, rgba(168,85,247,0.05) 100%); border: 1px solid rgba(59,130,246,0.2);">
                <div class="text-2xl font-bold mb-1" style="color: var(--navy-accent);">∞</div>
                <div class="text-sm font-medium" style="color: var(--navy-700);">Learning</div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </section>

    <!-- Skills Section -->
    <section id="skill" class="relative py-24 overflow-hidden"
      style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); font-family: 'Inter', sans-serif;">

      {{-- Dot pattern background --}}
      <div class="absolute inset-0 opacity-20"
        style="background-image: radial-gradient(rgba(10,15,44,0.05) 1px, transparent 1px); background-size: 36px 36px;">
      </div>

      {{-- Subtle glow --}}
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full pointer-events-none opacity-10"
        style="background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, transparent 70%);">
      </div>

      <div class="relative z-10 max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold mb-4" style="font-family: 'Inter', sans-serif; color: var(--navy-900);">
            Skills
          </h2>
          <div class="w-24 h-1 mx-auto rounded-full mb-4" style="background: var(--navy-accent);"></div>
          <p class="text-lg" style="color: var(--navy-700);">
            Technologies and tools I work with
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          {{-- Frontend Card --}}
          <div class="group p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
            style="background: linear-gradient(135deg, rgba(255,255,255,0.98) 0%, rgba(248,250,252,0.95) 100%); border: 2px solid rgba(59,130,246,0.2); backdrop-filter: blur(15px);">
            <div class="text-center">
              <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-3xl"
                style="background: linear-gradient(135deg, rgba(59,130,246,0.1) 0%, rgba(59,130,246,0.2) 100%);">
                💻
              </div>
              <h3 class="text-xl font-bold mb-4" style="color: var(--navy-900); font-family: 'Inter', sans-serif;">
                Frontend Development
              </h3>
              <p class="text-gray-600 leading-relaxed mb-6">
                HTML, CSS, JavaScript, React, Vue.js, Tailwind CSS
              </p>
              <div class="flex flex-wrap justify-center gap-2">
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(59,130,246,0.1); color: var(--navy-accent);">React</span>
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(59,130,246,0.1); color: var(--navy-accent);">Vue</span>
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(59,130,246,0.1); color: var(--navy-accent);">Tailwind</span>
              </div>
            </div>
          </div>

          {{-- Backend Card --}}
          <div class="group p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
            style="background: linear-gradient(135deg, rgba(255,255,255,0.98) 0%, rgba(248,250,252,0.95) 100%); border: 2px solid rgba(245,158,11,0.2); backdrop-filter: blur(15px);">
            <div class="text-center">
              <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-3xl"
                style="background: linear-gradient(135deg, rgba(245,158,11,0.1) 0%, rgba(245,158,11,0.2) 100%);">
                ⚙️
              </div>
              <h3 class="text-xl font-bold mb-4" style="color: var(--navy-900); font-family: 'Inter', sans-serif;">
                Backend Development
              </h3>
              <p class="text-gray-600 leading-relaxed mb-6">
                PHP, Laravel, Node.js, MySQL, MongoDB
              </p>
              <div class="flex flex-wrap justify-center gap-2">
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(245,158,11,0.1); color: var(--gold);">Laravel</span>
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(245,158,11,0.1); color: var(--gold);">PHP</span>
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(245,158,11,0.1); color: var(--gold);">MySQL</span>
              </div>
            </div>
          </div>

          {{-- Design Card --}}
          <div class="group p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
            style="background: linear-gradient(135deg, rgba(255,255,255,0.98) 0%, rgba(248,250,252,0.95) 100%); border: 2px solid rgba(59,130,246,0.2); backdrop-filter: blur(15px);">
            <div class="text-center">
              <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-3xl"
                style="background: linear-gradient(135deg, rgba(59,130,246,0.1) 0%, rgba(59,130,246,0.2) 100%);">
                🎨
              </div>
              <h3 class="text-xl font-bold mb-4" style="color: var(--navy-900); font-family: 'Inter', sans-serif;">
                Design & UX
              </h3>
              <p class="text-gray-600 leading-relaxed mb-6">
                UI/UX Design, Figma, Adobe XD, Responsive Design
              </p>
              <div class="flex flex-wrap justify-center gap-2">
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(59,130,246,0.1); color: var(--navy-accent);">Figma</span>
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(59,130,246,0.1); color: var(--navy-accent);">UI/UX</span>
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(59,130,246,0.1); color: var(--navy-accent);">Responsive</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Projects Section -->
    <section id="project" class="relative py-24 overflow-hidden bg-white" style="font-family: 'Inter', sans-serif;">

      {{-- Subtle dot pattern --}}
      <div class="absolute inset-0 opacity-20"
        style="background-image: radial-gradient(rgba(10,15,44,0.03) 1px, transparent 1px); background-size: 40px 40px;">
      </div>

      {{-- Soft glow --}}
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full pointer-events-none opacity-5"
        style="background: radial-gradient(circle, rgba(59,130,246,0.1) 0%, transparent 70%);">
      </div>

      <div class="relative z-10 max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold mb-4" style="color: var(--navy-900);">
            Featured Projects
          </h2>
          <div class="w-24 h-1 mx-auto rounded-full mb-4" style="background: var(--navy-accent);"></div>
          <p class="text-lg" style="color: var(--navy-700);">
            Some of my recent work and projects
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          @foreach ($projects as $project)
          <div class="group rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
            style="background: linear-gradient(135deg, rgba(255,255,255,0.98) 0%, rgba(248,250,252,0.95) 100%); border: 1px solid rgba(148,163,184,0.3); backdrop-filter: blur(15px);">
            <div class="relative overflow-hidden">
              <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-3" style="color: var(--navy-900);">
                {{ $project->title }}
              </h3>
              <p class="text-gray-600 mb-4 leading-relaxed">
                {{ $project->description }}
              </p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(59,130,246,0.1); color: var(--navy-accent);">Laravel</span>
                <span class="px-3 py-1 text-xs rounded-full font-medium"
                  style="background: rgba(245,158,11,0.1); color: var(--gold);">React</span>
              </div>
              <div class="flex gap-4">
                @if($project->demo_link)
                <a href="{{ $project->demo_link }}"
                  class="flex-1 text-center px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:scale-105"
                  style="background: var(--navy-accent); color: white;">
                  View Demo
                </a>
                @endif
                @if($project->github_link)
                <a href="{{ $project->github_link }}"
                  class="flex-1 text-center px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 border-2 hover:scale-105"
                  style="border-color: var(--navy-accent); color: var(--navy-accent);">
                  GitHub
                </a>
                @endif
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </section>

    <!-- Contact Section -->
    <section id="contact" class="relative py-24 overflow-hidden"
      style="background: linear-gradient(135deg, var(--navy-900) 0%, var(--navy-800) 50%, var(--navy-700) 100%); font-family: 'Inter', sans-serif;">

      {{-- Dot pattern background --}}
      <div class="absolute inset-0"
        style="background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px); background-size: 32px 32px;">
      </div>

      {{-- Glow effects --}}
      <div class="absolute -top-20 -right-20 w-96 h-96 rounded-full pointer-events-none"
        style="background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, transparent 70%);">
      </div>
      <div class="absolute -bottom-16 -left-16 w-72 h-72 rounded-full pointer-events-none"
        style="background: radial-gradient(circle, rgba(245,158,11,0.08) 0%, transparent 70%);">
      </div>

      <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
        <div class="mb-16">
          <h2 class="text-4xl font-bold mb-4" style="color: var(--white);">
            Get In Touch
          </h2>
          <div class="w-24 h-1 mx-auto rounded-full mb-4" style="background: var(--navy-accent);"></div>
          <p class="text-xl" style="color: var(--muted);">
            I'm always open to discussing new opportunities and interesting projects.
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-16">
          {{-- Email Card --}}
          <div class="group bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-2">
            <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-3xl"
              style="background: linear-gradient(135deg, rgba(59,130,246,0.2) 0%, rgba(168,85,247,0.3) 100%);">
              📧
            </div>
            <h3 class="text-xl font-bold mb-4" style="color: var(--white);">
              Email
            </h3>
            <p class="text-base mb-6" style="color: var(--muted);">
              @adristyakikoyukinata.com
            </p>
            <a href="mailto:your.email@example.com"
              class="inline-block px-6 py-2 rounded-full text-sm font-medium transition-all duration-200 hover:scale-105"
              style="background: var(--navy-accent); color: white;">
              Send Email
            </a>
          </div>

          {{-- Phone Card --}}
          <div class="group bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-2">
            <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-3xl"
              style="background: linear-gradient(135deg, rgba(245,158,11,0.2) 0%, rgba(34,197,94,0.3) 100%);">
              📱
            </div>
            <h3 class="text-xl font-bold mb-4" style="color: var(--white);">
              Phone
            </h3>
            <p class="text-base mb-6" style="color: var(--muted);">
              +62 89639685566
            </p>
            <a href="tel:+621234567890"
              class="inline-block px-6 py-2 rounded-full text-sm font-medium transition-all duration-200 hover:scale-105"
              style="background: var(--gold); color: #1a1a1a;">
              Call Now
            </a>
          </div>

          {{-- Location Card --}}
          <div class="group bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-2">
            <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-3xl"
              style="background: linear-gradient(135deg, rgba(59,130,246,0.2) 0%, rgba(168,85,247,0.3) 100%);">
              📍
            </div>
            <h3 class="text-xl font-bold mb-4" style="color: var(--white);">
              Location
            </h3>
            <p class="text-base mb-6" style="color: var(--muted);">
              Jepara, Indonesia
            </p>
            <button class="inline-block px-6 py-2 rounded-full text-sm font-medium transition-all duration-200 hover:scale-105"
              style="background: var(--navy-accent); color: white;">
              View Map
            </button>
          </div>
        </div>

        {{-- Social Links --}}
        <div class="flex justify-center gap-6">
          <a href="#" class="w-12 h-12 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110"
            style="background: rgba(59,130,246,0.2); border: 1px solid rgba(59,130,246,0.3);">
            <span class="text-xl">💼</span>
          </a>
          <a href="#" class="w-12 h-12 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110"
            style="background: rgba(245,158,11,0.2); border: 1px solid rgba(245,158,11,0.3);">
            <span class="text-xl">🐙</span>
          </a>
          <a href="#" class="w-12 h-12 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110"
            style="background: rgba(59,130,246,0.2); border: 1px solid rgba(59,130,246,0.3);">
            <span class="text-xl">💬</span>
          </a>
        </div>

      </div>

    </section>
</x-landing-layout>