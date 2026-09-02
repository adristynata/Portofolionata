<x-landing-layout>

    {{-- Navbar --}}
    @include('landing.navbar')
    
    {{-- === 1. HERO SECTION (#home) === --}}
    <section id="home" class="relative min-h-screen flex items-center justify-center pt-28 pb-16 sm:pt-36 sm:pb-24 lg:pt-40 lg:pb-32 overflow-hidden bg-[#070b19]">
        {{-- Background Glow & Grid Effects --}}
        <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:32px_32px] opacity-25"></div>
        <div class="absolute top-1/4 -right-20 w-80 sm:w-96 h-80 sm:h-96 bg-cyan-500/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 -left-20 w-80 sm:w-96 h-80 sm:h-96 bg-purple-600/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-6 sm:py-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">
                
                {{-- Left Side: Texts & Action Buttons --}}
                <div class="lg:col-span-7 flex flex-col gap-5 sm:gap-6 text-left">
                    
                    {{-- Pill Badge --}}
                    <div>
                        <span class="inline-flex items-center gap-2 px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full text-[11px] sm:text-xs font-extrabold uppercase tracking-wider bg-slate-900/90 border border-cyan-500/40 text-cyan-400 shadow-[0_0_15px_rgba(0,240,255,0.15)]">
                            <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                            FULLSTACK SOFTWARE ENGINEER
                        </span>
                    </div>

                    {{-- Main Title --}}
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight">
                        Halo, Saya <br>
                        <span class="text-gradient-cyan-purple drop-shadow-sm">{{ $profile->name ?? 'Adristy Akiko Yukinata' }}</span>
                    </h1>

                    {{-- Subheading --}}
                    <h2 class="text-lg sm:text-2xl font-bold text-slate-300">
                        {{ $profile->role_title ?? 'Web Developer' }}
                    </h2>

                    {{-- Bio / Intro Paragraph --}}
                    <p class="text-sm sm:text-lg text-slate-400 font-normal leading-relaxed max-w-2xl">
                        {{ $profile->hero_bio ?? 'Saya adalah Junior Web Developer & Software Engineer dari SMK Negeri 1 Bangsri yang berfokus pada pengembangan aplikasi web modern, responsif, dan berperforma tinggi.' }}
                    </p>

                    {{-- CTA Buttons --}}
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4 pt-2 w-full sm:w-auto">
                        <a href="#project" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl font-bold text-sm text-white bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 shadow-lg shadow-blue-600/30 hover:shadow-cyan-500/40 hover:-translate-y-0.5 transition-all text-center">
                            <span>Lihat Hasil Karya</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </a>
                        <a href="#contact" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-xl font-semibold text-sm text-slate-200 bg-slate-900/80 border border-slate-700/80 hover:border-cyan-500/60 hover:text-white hover:bg-slate-800 transition-all shadow-inner text-center">
                            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            <span>Hubungi Saya</span>
                        </a>
                    </div>

                    {{-- Dynamic Social Media Links (Editable via Admin Dashboard) --}}
                    <div class="flex items-center gap-3 pt-3 sm:pt-4">
                        @if(!empty($profile->github_url))
                            <a href="{{ $profile->github_url }}" target="_blank" title="GitHub" class="w-10 h-10 rounded-full bg-slate-900/90 border border-slate-700/80 flex items-center justify-center text-slate-300 hover:text-cyan-400 hover:border-cyan-500/50 hover:scale-110 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                            </a>
                        @endif

                        @if(!empty($profile->linkedin_url))
                            <a href="{{ $profile->linkedin_url }}" target="_blank" title="LinkedIn" class="w-10 h-10 rounded-full bg-slate-900/90 border border-slate-700/80 flex items-center justify-center text-slate-300 hover:text-cyan-400 hover:border-cyan-500/50 hover:scale-110 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                            </a>
                        @endif

                        @if(!empty($profile->instagram_url))
                            <a href="{{ $profile->instagram_url }}" target="_blank" title="Instagram" class="w-10 h-10 rounded-full bg-slate-900/90 border border-slate-700/80 flex items-center justify-center text-slate-300 hover:text-cyan-400 hover:border-cyan-500/50 hover:scale-110 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                        @endif

                        @if(!empty($profile->whatsapp_url))
                            <a href="{{ $profile->whatsapp_url }}" target="_blank" title="WhatsApp" class="w-10 h-10 rounded-full bg-slate-900/90 border border-slate-700/80 flex items-center justify-center text-slate-300 hover:text-cyan-400 hover:border-cyan-500/50 hover:scale-110 transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            </a>
                        @endif
                    </div>

                </div>

                {{-- Right Side: Profile Photo Frame --}}
                <div class="lg:col-span-5 flex justify-center mt-6 lg:mt-0">
                    <div class="relative group">
                        
                        {{-- Neon Outer Glow --}}
                        <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 blur-xl opacity-80 group-hover:opacity-100 transition duration-500 shadow-[0_0_50px_rgba(0,240,255,0.4)]"></div>

                        {{-- Photo Frame Container --}}
                        <div class="relative w-[270px] sm:w-[320px] lg:w-[350px] h-[340px] sm:h-[400px] lg:h-[430px] rounded-3xl overflow-hidden bg-slate-900 border-2 border-cyan-400/80 shadow-2xl">
                            <img src="{{ !empty($profile->photo) ? asset($profile->photo) : asset('images/foto-saya.jpg') }}" alt="{{ $profile->name ?? 'Foto' }}" class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- === 2. ABOUT SECTION (#about) === --}}
    <section id="about" class="relative py-16 sm:py-24 bg-[#090e23] border-t border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Section Header --}}
            <div class="text-center mb-12 sm:mb-16">
                <span class="text-xs font-black uppercase tracking-widest text-cyan-400">TENTANG SAYA</span>
                <div class="w-16 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto rounded-full mt-2 mb-4"></div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white">
                    Dedikasi Dalam Pengembangan Aplikasi Web
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                
                {{-- Left Column: Bio & 4 Detail Info Cards --}}
                <div class="lg:col-span-7 flex flex-col gap-6">
                    <h3 class="text-xl sm:text-2xl font-bold text-white">
                        Mengembangkan Solusi Software Berkualitas & Berperforma Tinggi
                    </h3>

                    <p class="text-slate-300 leading-relaxed text-sm sm:text-base whitespace-pre-line">
                        {{ $profile->bio ?? 'Saya adalah junior web developer dari SMK Negeri 1 Bangsri yang passionate dalam menciptakan pengalaman digital yang menarik dan fungsional.' }}
                    </p>

                    {{-- 2x2 Information Grid Cards --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 sm:pt-4">
                        
                        {{-- Card 1: Pendidikan --}}
                        <div class="dark-glass-card p-4 rounded-xl flex items-center gap-3.5 border border-white/10 hover:border-cyan-500/40 transition">
                            <div class="w-10 h-10 rounded-lg bg-blue-500/10 text-cyan-400 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>
                            </div>
                            <div>
                                <span class="block text-xs text-slate-400 font-semibold">Pendidikan</span>
                                <span class="text-xs sm:text-sm font-bold text-white">{{ $profile->education ?? 'Teknik Informatika / RPL' }}</span>
                            </div>
                        </div>

                        {{-- Card 2: Fokus Utama --}}
                        <div class="dark-glass-card p-4 rounded-xl flex items-center gap-3.5 border border-white/10 hover:border-cyan-500/40 transition">
                            <div class="w-10 h-10 rounded-lg bg-cyan-500/10 text-cyan-400 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <span class="block text-xs text-slate-400 font-semibold">Fokus Utama</span>
                                <span class="text-xs sm:text-sm font-bold text-white">{{ $profile->focus ?? 'Web & Backend Dev' }}</span>
                            </div>
                        </div>

                        {{-- Card 3: Email --}}
                        <div class="dark-glass-card p-4 rounded-xl flex items-center gap-3.5 border border-white/10 hover:border-cyan-500/40 transition overflow-hidden">
                            <div class="w-10 h-10 rounded-lg bg-purple-500/10 text-purple-400 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div class="overflow-hidden min-w-0">
                                <span class="block text-xs text-slate-400 font-semibold">Email</span>
                                <span class="text-xs sm:text-sm font-bold text-white truncate block" title="{{ $profile->email ?? 'adristyakikoyukinata@gmail.com' }}">
                                    {{ $profile->email ?? 'adristyakikoyukinata@gmail.com' }}
                                </span>
                            </div>
                        </div>

                        {{-- Card 4: Lokasi --}}
                        <div class="dark-glass-card p-4 rounded-xl flex items-center gap-3.5 border border-white/10 hover:border-cyan-500/40 transition">
                            <div class="w-10 h-10 rounded-lg bg-indigo-500/10 text-indigo-400 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <span class="block text-xs text-slate-400 font-semibold">Lokasi</span>
                                <span class="text-xs sm:text-sm font-bold text-white">{{ $profile->location ?? 'Jepara' }}</span>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Right Column: 4 Stat Cards --}}
                <div class="lg:col-span-5 grid grid-cols-2 gap-4">
                    
                    {{-- Stat 1 --}}
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800 text-center flex flex-col items-center justify-center hover:border-cyan-500/50 transition">
                        <span class="text-3xl sm:text-4xl font-black text-cyan-400 mb-1">{{ max(1, count($projects)) }}+</span>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">PROYEK SELESAI</span>
                    </div>

                    {{-- Stat 2 --}}
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800 text-center flex flex-col items-center justify-center hover:border-purple-500/50 transition">
                        <span class="text-3xl sm:text-4xl font-black text-purple-400 mb-1">{{ max(1, count($skills)) }}+</span>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">SKILL & TOOLS</span>
                    </div>

                    {{-- Stat 3 --}}
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800 text-center flex flex-col items-center justify-center hover:border-pink-500/50 transition">
                        <span class="text-3xl sm:text-4xl font-black text-pink-400 mb-1">{{ max(1, count($certificates)) }}+</span>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">SERTIFIKASI</span>
                    </div>

                    {{-- Stat 4 --}}
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800 text-center flex flex-col items-center justify-center hover:border-emerald-500/50 transition">
                        <span class="text-3xl sm:text-4xl font-black text-emerald-400 mb-1">100%</span>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">CLEAN CODE</span>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- === 3. SKILLS SECTION (#skill) === --}}
    <section id="skill" class="relative py-16 sm:py-24 bg-[#070b19]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Section Header --}}
            <div class="text-center mb-12 sm:mb-16">
                <span class="text-xs font-black uppercase tracking-widest text-cyan-400">KEAHLIAN TEKNIS</span>
                <div class="w-16 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto rounded-full mt-2 mb-4"></div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white">
                    Teknologi & Bahasa Pemrograman
                </h2>
            </div>

            {{-- Dynamic Skill Cards Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                @forelse ($skills as $skill)
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800/80 hover:border-cyan-500/50 transition duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                </div>
                                <div>
                                    <h3 class="text-base font-bold text-white">{{ $skill->name }}</h3>
                                    <span class="text-xs font-semibold text-cyan-400">{{ $skill->level }}</span>
                                </div>
                            </div>
                            <span class="text-sm font-bold text-cyan-400">{{ $skill->percentage }}%</span>
                        </div>
                        <div class="w-full bg-slate-800 h-2 rounded-full overflow-hidden">
                            <div class="progress-gradient-bar h-full rounded-full" style="width: {{ $skill->percentage }}%"></div>
                        </div>
                    </div>
                @empty
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800/80 hover:border-cyan-500/50 transition duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                </div>
                                <div>
                                    <h3 class="text-base font-bold text-white">Laravel</h3>
                                    <span class="text-xs font-semibold text-cyan-400">Beginner</span>
                                </div>
                            </div>
                            <span class="text-sm font-bold text-cyan-400">70%</span>
                        </div>
                        <div class="w-full bg-slate-800 h-2 rounded-full overflow-hidden">
                            <div class="progress-gradient-bar h-full rounded-full" style="width: 70%"></div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- === 4. PROJECTS SECTION (#project) === --}}
    <section id="project" class="relative py-16 sm:py-24 bg-[#090e23] border-t border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Section Header --}}
            <div class="text-center mb-8 sm:mb-10">
                <span class="text-xs font-black uppercase tracking-widest text-cyan-400">PORTOFOLIO KARYA</span>
                <div class="w-16 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto rounded-full mt-2 mb-4"></div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white">
                    Proyek Yang Telah Dikembangkan
                </h2>
            </div>

            {{-- Category Filter Pill --}}
            <div class="flex justify-center mb-8 sm:mb-12">
                <button type="button" class="px-6 py-2.5 rounded-full text-xs font-extrabold text-white bg-cyan-500 shadow-[0_0_20px_rgba(0,240,255,0.4)] transition hover:bg-cyan-400">
                    Semua Proyek
                </button>
            </div>

            {{-- Dynamic Projects Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                @forelse ($projects as $project)
                    <div class="dark-glass-card rounded-2xl overflow-hidden border border-slate-800 hover:border-cyan-500/50 transition duration-300 flex flex-col justify-between">
                        <div>
                            {{-- Image Header --}}
                            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-slate-900">
                                @if($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-slate-600 bg-slate-900 font-bold text-xs">
                                        No Image
                                    </div>
                                @endif
                                <span class="absolute top-3 right-3 px-3 py-1 rounded-full text-[11px] font-extrabold bg-cyan-500 text-white shadow-md">
                                    Web App
                                </span>
                            </div>

                            {{-- Content --}}
                            <div class="p-5 sm:p-6">
                                <h3 class="text-base sm:text-lg font-bold text-white mb-2 leading-snug">
                                    {{ $project->title }}
                                </h3>
                                <p class="text-xs text-slate-400 mb-4 leading-relaxed line-clamp-3">
                                    {{ $project->description }}
                                </p>
                                <div class="flex flex-wrap gap-2 mb-2">
                                    <span class="px-2.5 py-1 rounded-md text-[10px] font-bold bg-slate-800 text-cyan-400 border border-slate-700">laravel</span>
                                    <span class="px-2.5 py-1 rounded-md text-[10px] font-bold bg-slate-800 text-cyan-400 border border-slate-700">tailwind</span>
                                </div>
                            </div>
                        </div>

                        {{-- Footer Actions --}}
                        <div class="px-5 sm:px-6 pb-5 pt-2 flex items-center justify-between border-t border-slate-800/60">
                            @if($project->demo_link)
                                <a href="{{ $project->demo_link }}" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-bold text-cyan-400 hover:text-cyan-300">
                                    <span>Detail Proyek</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </a>
                            @else
                                <span class="text-xs font-bold text-cyan-400 flex items-center gap-1 cursor-pointer">
                                    <span>Detail Proyek</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </span>
                            @endif

                            @if($project->github_link)
                                <a href="{{ $project->github_link }}" target="_blank" class="text-slate-400 hover:text-white transition">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                                </a>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="dark-glass-card rounded-2xl overflow-hidden border border-slate-800 hover:border-cyan-500/50 transition duration-300 flex flex-col justify-between">
                        <div>
                            <div class="relative h-48 sm:h-52 w-full overflow-hidden bg-slate-900">
                                <img src="{{ asset('images/foto-saya.jpg') }}" alt="Website E Commerce Tote Bag Art Terra" class="w-full h-full object-cover">
                                <span class="absolute top-3 right-3 px-3 py-1 rounded-full text-[11px] font-extrabold bg-cyan-500 text-white shadow-md">
                                    Web App
                                </span>
                            </div>
                            <div class="p-5 sm:p-6">
                                <h3 class="text-base sm:text-lg font-bold text-white mb-2">
                                    Website E Commerce Tote Bag Art Terra
                                </h3>
                                <p class="text-xs text-slate-400 mb-4 leading-relaxed">
                                    Website Ini adalah E commerce yang menjual tote bag ramah lingkungan
                                </p>
                                <div class="flex flex-wrap gap-2 mb-2">
                                    <span class="px-2.5 py-1 rounded-md text-[10px] font-bold bg-slate-800 text-cyan-400 border border-slate-700">laravel</span>
                                    <span class="px-2.5 py-1 rounded-md text-[10px] font-bold bg-slate-800 text-cyan-400 border border-slate-700">tailwind</span>
                                </div>
                            </div>
                        </div>

                        <div class="px-5 sm:px-6 pb-5 pt-2 flex items-center justify-between border-t border-slate-800/60">
                            <span class="text-xs font-bold text-cyan-400 flex items-center gap-1 cursor-pointer">
                                <span>Detail Proyek</span>
                                <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </span>
                            <a href="https://github.com" target="_blank" class="text-slate-400 hover:text-white transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                            </a>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </section>

    {{-- === 5. EXPERIENCE & TIMELINE SECTION (#pengalaman) === --}}
    <section id="pengalaman" class="relative py-16 sm:py-24 bg-[#070b19]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Section Header --}}
            <div class="text-center mb-12 sm:mb-16">
                <span class="text-xs font-black uppercase tracking-widest text-cyan-400">PENGALAMAN & REKAM JEJAK</span>
                <div class="w-16 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto rounded-full mt-2 mb-4"></div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white">
                    Riwayat Pendidikan & Organisasi
                </h2>
            </div>

            {{-- Dynamic Timeline Cards --}}
            <div class="max-w-4xl mx-auto relative pl-4 sm:pl-6 border-l-2 border-cyan-500/40 space-y-6 sm:space-y-8">
                @forelse ($experiences as $exp)
                    <div class="relative">
                        <div class="absolute -left-[23px] sm:-left-[31px] top-4 w-4 h-4 rounded-full bg-cyan-400 border-4 border-[#070b19] shadow-[0_0_10px_#00f0ff]"></div>
                        <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800/80 hover:border-cyan-500/50 transition duration-300">
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full text-[10px] font-extrabold uppercase bg-cyan-500/10 text-cyan-400 border border-cyan-500/30">
                                    {{ $exp->type }}
                                </span>
                                <span class="text-xs font-semibold text-slate-400 flex items-center gap-1">
                                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span>{{ $exp->period }}</span>
                                </span>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-cyan-400">
                                {{ $exp->title }}
                            </h3>
                            @if($exp->organization)
                                <h4 class="text-xs sm:text-sm font-semibold text-slate-300 mb-2">
                                    {{ $exp->organization }}
                                </h4>
                            @endif
                            @if($exp->description)
                                <p class="text-xs text-slate-400 leading-relaxed">
                                    {{ $exp->description }}
                                </p>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="relative">
                        <div class="absolute -left-[23px] sm:-left-[31px] top-4 w-4 h-4 rounded-full bg-cyan-400 border-4 border-[#070b19] shadow-[0_0_10px_#00f0ff]"></div>
                        <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800/80 hover:border-cyan-500/50 transition duration-300">
                            <div class="flex flex-wrap items-center justify-between gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full text-[10px] font-extrabold uppercase bg-cyan-500/10 text-cyan-400 border border-cyan-500/30">
                                    PENDIDIKAN
                                </span>
                                <span class="text-xs font-semibold text-slate-400 flex items-center gap-1">
                                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span>2024 – 2026</span>
                                </span>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-cyan-400">
                                Web Developer
                            </h3>
                            <h4 class="text-xs sm:text-sm font-semibold text-slate-300 mb-2">
                                Organisasi
                            </h4>
                            <p class="text-xs text-slate-400 leading-relaxed">
                                masih berlangsung sampai sekarang
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    {{-- === 6. CERTIFICATIONS SECTION (#sertifikat) === --}}
    <section id="sertifikat" class="relative py-16 sm:py-24 bg-[#090e23] border-t border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Section Header --}}
            <div class="text-center mb-12 sm:mb-16">
                <span class="text-xs font-black uppercase tracking-widest text-cyan-400">SERTIFIKASI & LISENSI</span>
                <div class="w-16 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto rounded-full mt-2 mb-4"></div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white">
                    Pencapaian & Bukti Kompetensi
                </h2>
            </div>

            {{-- Certificate Cards Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 max-w-5xl mx-auto">
                @forelse ($certificates as $cert)
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800 hover:border-cyan-500/50 transition duration-300 flex flex-col sm:flex-row items-start gap-4 sm:gap-5">
                        @if($cert->image)
                            <div class="w-full sm:w-28 h-40 sm:h-24 rounded-xl overflow-hidden bg-slate-900 border border-slate-800 shrink-0 cursor-pointer group/img" onclick="openCertModal('{{ asset('storage/' . $cert->image) }}', '{{ $cert->title }}')">
                                <img src="{{ asset('storage/' . $cert->image) }}" alt="{{ $cert->title }}" class="w-full h-full object-cover group-hover/img:scale-105 transition duration-300">
                            </div>
                        @else
                            <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2 0h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                            </div>
                        @endif
                        <div class="flex-1 w-full">
                            <span class="text-[10px] font-extrabold uppercase text-cyan-400 tracking-wider">{{ $cert->type }}</span>
                            <h3 class="text-base sm:text-lg font-bold text-white mt-1">{{ $cert->title }}</h3>
                            <p class="text-xs text-slate-400 mt-1 mb-3">{{ $cert->issuer }}</p>
                            <div class="flex flex-wrap items-center gap-3">
                                <span class="inline-block text-[11px] font-semibold text-slate-400 bg-slate-900 border border-slate-800 px-3 py-1 rounded-full">
                                    Tahun {{ $cert->year }}
                                </span>
                                @if($cert->image)
                                    <button type="button" onclick="openCertModal('{{ asset('storage/' . $cert->image) }}', '{{ $cert->title }}')" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 transition flex items-center gap-1">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                        <span>Lihat Sertifikat</span>
                                    </button>
                                @endif
                                @if($cert->link)
                                    <a href="{{ $cert->link }}" target="_blank" class="text-xs font-bold text-purple-400 hover:text-purple-300 transition flex items-center gap-1">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                                        <span>Kredensial</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800 hover:border-cyan-500/50 transition duration-300 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2 0h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-extrabold uppercase text-cyan-400 tracking-wider">SERTIFIKASI KOMPETENSI</span>
                            <h3 class="text-base sm:text-lg font-bold text-white mt-1">Junior Web Developer</h3>
                            <p class="text-xs text-slate-400 mt-1 mb-3">SMK Negeri 1 Bangsri & Partners</p>
                            <span class="inline-block text-[11px] font-semibold text-slate-400 bg-slate-900 border border-slate-800 px-3 py-1 rounded-full">
                                Tahun 2024
                            </span>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Public Modal Preview Foto Sertifikat -->
            <div id="cert-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/85 backdrop-blur-md p-4" onclick="this.classList.add('hidden')">
                <div class="relative max-w-4xl w-full p-2" onclick="event.stopPropagation()">
                    <button type="button" onclick="document.getElementById('cert-modal').classList.add('hidden')" class="absolute -top-10 right-0 text-slate-300 hover:text-white text-2xl leading-none">&times; Tutup</button>
                    <img id="cert-modal-img" src="" alt="Sertifikat" class="w-full h-auto max-h-[85vh] object-contain rounded-2xl border border-slate-700 shadow-2xl">
                    <p id="cert-modal-title" class="text-center text-sm font-bold text-white mt-3"></p>
                </div>
            </div>

            <script>
                function openCertModal(imgUrl, title) {
                    document.getElementById('cert-modal-img').src = imgUrl;
                    document.getElementById('cert-modal-title').innerText = title;
                    document.getElementById('cert-modal').classList.remove('hidden');
                }
            </script>
        </div>
    </section>

    {{-- === 7. CONTACT SECTION (#contact) === --}}
    <section id="contact" class="relative py-16 sm:py-24 bg-[#070b19]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Section Header --}}
            <div class="text-center mb-12 sm:mb-16">
                <span class="text-xs font-black uppercase tracking-widest text-cyan-400">KONTAK</span>
                <div class="w-16 h-1 bg-gradient-to-r from-cyan-400 to-purple-500 mx-auto rounded-full mt-2 mb-4"></div>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white">
                    Hubungi Saya
                </h2>
                <p class="text-slate-400 text-xs sm:text-sm mt-2">
                    Siap berkolaborasi untuk membuat proyek web Anda berikutnya.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start max-w-6xl mx-auto">
                
                {{-- Left: Quick Contact Info --}}
                <div class="lg:col-span-5 flex flex-col gap-4 sm:gap-6">
                    
                    {{-- Email --}}
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800 flex items-center gap-4 hover:border-cyan-500/50 transition">
                        <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="overflow-hidden min-w-0">
                            <span class="block text-xs font-semibold text-slate-400">Email</span>
                            <a href="mailto:{{ $profile->email ?? 'adristyakikoyukinata@gmail.com' }}" class="text-xs sm:text-sm font-bold text-white hover:text-cyan-400 transition truncate block">
                                {{ $profile->email ?? 'adristyakikoyukinata@gmail.com' }}
                            </a>
                        </div>
                    </div>

                    {{-- WhatsApp / Phone --}}
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800 flex items-center gap-4 hover:border-cyan-500/50 transition">
                        <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-slate-400">Telepon / WhatsApp</span>
                            <a href="{{ $profile->whatsapp_url ?? 'https://wa.me/6289639685566' }}" target="_blank" class="text-xs sm:text-sm font-bold text-white hover:text-emerald-400 transition">
                                {{ $profile->phone ?? '+62 896-3968-5566' }}
                            </a>
                        </div>
                    </div>

                    {{-- Location --}}
                    <div class="dark-glass-card p-5 sm:p-6 rounded-2xl border border-slate-800 flex items-center gap-4 hover:border-cyan-500/50 transition">
                        <div class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-slate-400">Lokasi</span>
                            <span class="text-xs sm:text-sm font-bold text-white">
                                {{ $profile->location ?? 'Jepara, Jawa Tengah, Indonesia' }}
                            </span>
                        </div>
                    </div>

                </div>

                {{-- Right: Contact Form (Submits to DB) --}}
                <div class="lg:col-span-7">
                    @if(session('contact_success'))
                        <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm font-bold flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>{{ session('contact_success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="dark-glass-card p-6 sm:p-8 rounded-2xl border border-slate-800 space-y-5 sm:space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-6">
                            <div>
                                <label class="block text-xs font-bold text-slate-300 mb-2">Nama Lengkap</label>
                                <input type="text" name="name" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500 placeholder-slate-600" placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-300 mb-2">Alamat Email</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500 placeholder-slate-600" placeholder="nama@domain.com">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-300 mb-2">Subjek</label>
                            <input type="text" name="subject" class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500 placeholder-slate-600" placeholder="Judul / Subjek Pesan">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-300 mb-2">Pesan</label>
                            <textarea name="message" rows="4" required class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500 placeholder-slate-600" placeholder="Tuliskan pesan atau penawaran kerja sama di sini..."></textarea>
                        </div>
                        <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-sm text-white bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 transition shadow-lg shadow-blue-600/30 flex items-center justify-center gap-2">
                            <span>Kirim Pesan</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </section>

    {{-- === 8. FOOTER === --}}
    <footer class="py-8 bg-[#050814] border-t border-slate-800/80 text-center text-xs text-slate-500">
        <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-4">
            <span>© 2026 {{ $profile->name ?? 'Adristy Akiko Yukinata' }}. All rights reserved.</span>
            <div class="flex items-center gap-6">
                <a href="#home" class="hover:text-cyan-400 transition flex items-center gap-1">
                    <span>Kembali ke Atas</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                </a>
            </div>
        </div>
    </footer>

</x-landing-layout>