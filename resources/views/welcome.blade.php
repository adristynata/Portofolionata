<x-landing-layout>


    // Navbar
    @include('landing.navbar')
    
   {{-- Hero Section — Navy Theme dengan Slot Foto --}}
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>
  :root {
    --navy-900: #0a0f2c;
    --navy-800: #0d1540;
    --navy-700: #1a2457;
    --navy-600: #1e3a8a;
    --navy-accent: #3b82f6;
    --navy-light: #60a5fa;
    --gold: #f59e0b;
    --white: #f8fafc;
    --muted: #94a3b8;
  }
</style>

<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden"
  style="background: linear-gradient(135deg, var(--navy-900) 0%, var(--navy-800) 50%, var(--navy-700) 100%); font-family: 'DM Sans', sans-serif;">

  {{-- Dot pattern background --}}
  <div class="absolute inset-0"
    style="background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px); background-size: 32px 32px;">
  </div>

  {{-- Glow top-right --}}
  <div class="absolute -top-20 -right-20 w-96 h-96 rounded-full pointer-events-none"
    style="background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, transparent 70%);">
  </div>

  {{-- Glow bottom-left --}}
  <div class="absolute -bottom-16 -left-16 w-72 h-72 rounded-full pointer-events-none"
    style="background: radial-gradient(circle, rgba(245,158,11,0.08) 0%, transparent 70%);">
  </div>

  {{-- Main content --}}
  <div class="relative z-10 max-w-5xl mx-auto px-6 py-20 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

    {{-- === KIRI: Teks === --}}
    <div class="flex flex-col gap-6">

      {{-- Heading --}}
      <h1 class="leading-tight" style="font-family: 'Playfair Display', serif; font-size: clamp(36px, 5vw, 54px); font-weight: 900; color: var(--white);">
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
          class="inline-block px-7 py-3 rounded-lg text-sm font-medium text-white transition-all duration-200 hover:-translate-y-0.5"
          style="background: var(--navy-accent);">
          Learn More
        </a>
        <a href="#contact"
          class="inline-block px-7 py-3 rounded-lg text-sm font-normal transition-all duration-200"
          style="color: var(--white); border: 1px solid rgba(255,255,255,0.2);"
          onmouseover="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.45)'"
          onmouseout="this.style.background='transparent'; this.style.borderColor='rgba(255,255,255,0.2)'">
          Contact Me
        </a>
      </div>

      {{-- Stats --}}
      <div class="flex items-center gap-6 pt-2">
        <div class="flex flex-col gap-0.5">
          <span class="text-xl font-bold" style="font-family: 'Playfair Display', serif; color: var(--white);">5+</span>
          <span class="text-xs uppercase tracking-widest" style="color: var(--muted);">Projects</span>
        </div>
        <div class="w-px h-9" style="background: rgba(255,255,255,0.12);"></div>
        <div class="flex flex-col gap-0.5">
          <span class="text-xl font-bold" style="font-family: 'Playfair Display', serif; color: var(--white);">3 years</span>
          <span class="text-xs uppercase tracking-widest" style="color: var(--muted);">Experience</span>
        </div>
        <div class="w-px h-9" style="background: rgba(255,255,255,0.12);"></div>
        <div class="flex flex-col gap-0.5">
          <span class="text-xl font-bold" style="font-family: 'Playfair Display', serif; color: var(--white);">+</span>
          <span class="text-xs uppercase tracking-widest" style="color: var(--muted);">Clients</span>
        </div>
      </div>

    </div>

    {{-- === KANAN: Foto Profil === --}}
    <div class="flex justify-center">
      <div class="relative" style="width: 280px; height: 340px;">

        {{-- Border dekoratif miring --}}
        <div class="absolute inset-0 rounded-2xl"
          style="border: 2px solid rgba(59,130,246,0.4); transform: rotate(3deg);">
        </div>

        {{-- Foto container --}}
        <div class="absolute inset-0 rounded-2xl overflow-hidden"
          style="background: var(--navy-700); border: 1px solid rgba(255,255,255,0.08);">

          {{-- GANTI: taruh foto Anda di sini --}}
          {{-- <img src="{{ asset('images/foto-saya.jpg') }}" alt="Foto Saya" class="w-full h-full object-cover"> --}}

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
        <span class="absolute -top-3 -left-4 text-xs font-medium px-3 py-1 rounded-full"
          style="background: var(--gold); color: #1a1a1a; font-family: 'DM Sans', sans-serif;">
          Developer
        </span>

        {{-- Tag chip kanan bawah --}}
        <span class="absolute bottom-5 -right-4 text-xs font-medium px-3 py-1 rounded-full"
          style="background: var(--navy-accent); color: #fff; font-family: 'DM Sans', sans-serif;">
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
    <section id="about" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">About Me</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://via.placeholder.com/400x400" alt="Profile" class="rounded-lg shadow-lg">
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Hi, I'm [Your Name]</h3>
                    <p class="text-gray-600 mb-6">
                        I'm a passionate web developer with experience in creating modern, responsive, and user-friendly websites.
                        I love turning ideas into reality through code.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">50+</div>
                            <div class="text-gray-600">Projects</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">3+</div>
                            <div class="text-gray-600">Years Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skill" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Skills</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-4xl mb-4">💻</div>
                    <h3 class="text-xl font-semibold mb-2">Frontend Development</h3>
                    <p class="text-gray-600">HTML, CSS, JavaScript, React, Vue.js, Tailwind CSS</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-4xl mb-4">⚙️</div>
                    <h3 class="text-xl font-semibold mb-2">Backend Development</h3>
                    <p class="text-gray-600">PHP, Laravel, Node.js, MySQL, MongoDB</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="text-xl font-semibold mb-2">Design</h3>
                    <p class="text-gray-600">UI/UX Design, Figma, Adobe XD, Responsive Design</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="project" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Projects</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $project->description }}</p>
                        @if($project->demo_link)
                        <a href="{{ $project->demo_link }}" class="text-blue-600 hover:text-blue-800">View Demo →</a>
                        @endif
                        @if($project->github_link)
                        <a href="{{ $project->github_link }}" class="text-blue-600 hover:text-blue-800 ml-4">GitHub →</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-900 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-8">Get In Touch</h2>
            <p class="text-xl text-gray-300 mb-12">
                I'm always open to discussing new opportunities and interesting projects.
            </p>
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div>
                    <div class="text-3xl mb-4">📧</div>
                    <h3 class="text-xl font-semibold mb-2">Email</h3>
                    <p class="text-gray-300">your.email@example.com</p>
                </div>
                <div>
                    <div class="text-3xl mb-4">📱</div>
                    <h3 class="text-xl font-semibold mb-2">Phone</h3>
                    <p class="text-gray-300">+62 123 456 7890</p>
                </div>
                <div>
                    <div class="text-3xl mb-4">📍</div>
                    <h3 class="text-xl font-semibold mb-2">Location</h3>
                    <p class="text-gray-300">Jakarta, Indonesia</p>
                </div>
            </div>
            <a href="mailto:your.email@example.com" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition duration-300">
                Send Email
            </a>
        </div>
    </section>
</x-landing-layout>