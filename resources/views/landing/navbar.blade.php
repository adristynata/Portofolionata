<nav class="fixed top-0 left-0 w-full z-50 backdrop-blur-xl bg-[#070b19]/80 border-b border-white/10 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Left: Logo & Brand Info -->
            <a href="#home" class="flex items-center gap-3.5 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-600 to-cyan-400 flex items-center justify-center text-white font-black text-xl shadow-lg shadow-blue-500/25 group-hover:scale-105 transition-transform">
                    A
                </div>
                <div class="flex flex-col">
                    <span class="text-white font-bold tracking-tight text-base group-hover:text-cyan-400 transition-colors">
                        Adristy Akiko Yukinata
                    </span>
                    <span class="text-[10px] font-extrabold tracking-widest text-cyan-400 uppercase">
                        SOFTWARE DEVELOPER
                    </span>
                </div>
            </a>

            <!-- Center: Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-7 text-sm font-medium">
                <a href="#about" class="nav-link text-slate-300 hover:text-white transition-colors relative py-1">Tentang Saya</a>
                <a href="#skill" class="nav-link text-slate-300 hover:text-white transition-colors relative py-1">Keahlian</a>
                <a href="#project" class="nav-link text-slate-300 hover:text-white transition-colors relative py-1">Proyek</a>
                <a href="#pengalaman" class="nav-link text-slate-300 hover:text-white transition-colors relative py-1">Pengalaman</a>
                <a href="#sertifikat" class="nav-link text-slate-300 hover:text-white transition-colors relative py-1">Sertifikat</a>
                <a href="#contact" class="nav-link text-slate-300 hover:text-white transition-colors relative py-1">Kontak</a>
            </div>

            <!-- Right: Actions (Theme Switcher & Login Admin / User Profile) -->
            <div class="hidden lg:flex items-center gap-3">
                <!-- Theme Switcher Button -->
                <button type="button" onclick="toggleTheme()" title="Beralih Mode Gelap / Terang" class="w-10 h-10 rounded-xl bg-slate-900/80 border border-white/10 flex items-center justify-center text-amber-400 hover:bg-slate-800 transition-all shadow-inner">
                    <svg class="theme-icon-sun w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <svg class="theme-icon-moon w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                </button>

                @auth
                    <!-- User Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-medium transition-all bg-slate-900/80 border border-white/10 text-white hover:border-cyan-500/50">
                            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" x-cloak class="absolute right-0 mt-2 w-48 rounded-xl shadow-2xl py-2 bg-slate-900 border border-slate-700/80 z-50">
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-slate-200 hover:bg-slate-800 hover:text-cyan-400 transition">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-slate-200 hover:bg-slate-800 hover:text-rose-400 transition">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Login Admin Button -->
                    <button id="login-toggle" class="flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-medium transition-all bg-slate-900/90 border border-slate-700/70 text-white hover:border-cyan-500/60 hover:shadow-[0_0_20px_rgba(0,240,255,0.2)]">
                        <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        <span>Login Admin</span>
                    </button>
                @endauth
            </div>

            <!-- Mobile Actions Button -->
            <div class="lg:hidden flex items-center gap-2">
                <button type="button" onclick="toggleTheme()" class="w-9 h-9 rounded-lg bg-slate-900 border border-white/10 flex items-center justify-center text-amber-400">
                    <svg class="theme-icon-sun w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <svg class="theme-icon-moon w-4 h-4 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                </button>
                <button id="menu-btn" class="p-2 text-slate-300 hover:text-white rounded-lg bg-slate-900 border border-white/10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Login Modal Dropdown Form -->
    <div id="login-form" class="hidden absolute top-20 right-6 sm:right-12 w-80 bg-slate-900/95 backdrop-blur-2xl rounded-2xl shadow-2xl border border-slate-700/80 p-6 z-50">
        <div class="flex items-center justify-between mb-4 pb-2 border-b border-slate-800">
            <h3 class="text-base font-bold text-white flex items-center gap-2">
                <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
                Login Admin
            </h3>
            <button id="login-close" class="text-slate-400 hover:text-white text-xl leading-none">&times;</button>
        </div>
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-semibold text-slate-400 mb-1">Email</label>
                <input type="email" name="email" value="admin@portofolio.com" required class="w-full px-3.5 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 placeholder-slate-600" placeholder="admin@portofolio.com">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-400 mb-1">Password</label>
                <input type="password" name="password" required class="w-full px-3.5 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-sm text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 placeholder-slate-600" placeholder="••••••••">
            </div>
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="rounded border-slate-700 bg-slate-950 text-cyan-500 focus:ring-cyan-500">
                <label for="remember" class="ml-2 text-xs text-slate-400">Remember me</label>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 text-white font-semibold py-2.5 px-4 rounded-xl text-sm transition-all shadow-lg shadow-blue-500/25">
                Log In
            </button>
        </form>
    </div>

    <!-- Mobile Menu Container -->
    <div id="menu" class="hidden lg:hidden px-6 pb-6 pt-2 bg-slate-950/95 border-b border-slate-800 space-y-3">
        <a href="#about" class="block py-2 text-sm text-slate-300 hover:text-cyan-400 transition">Tentang Saya</a>
        <a href="#skill" class="block py-2 text-sm text-slate-300 hover:text-cyan-400 transition">Keahlian</a>
        <a href="#project" class="block py-2 text-sm text-slate-300 hover:text-cyan-400 transition">Proyek</a>
        <a href="#pengalaman" class="block py-2 text-sm text-slate-300 hover:text-cyan-400 transition">Pengalaman</a>
        <a href="#sertifikat" class="block py-2 text-sm text-slate-300 hover:text-cyan-400 transition">Sertifikat</a>
        <a href="#contact" class="block py-2 text-sm text-slate-300 hover:text-cyan-400 transition">Kontak</a>

        @auth
            <a href="{{ route('dashboard') }}" class="block py-2 text-sm font-semibold text-cyan-400">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block w-full text-left py-2 text-sm text-rose-400">Logout</button>
            </form>
        @else
            <button id="mobile-login-toggle" class="w-full mt-2 py-2.5 rounded-xl text-sm font-semibold bg-slate-900 border border-slate-700 text-white">Login Admin</button>
        @endauth
    </div>
</nav>

<style>
.nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0%;
    height: 2px;
    background: linear-gradient(90deg, #00f0ff, #a855f7);
    transition: all 0.3s ease;
    border-radius: 2px;
}

.nav-link:hover::after {
    width: 100%;
}
</style>

<script>
function toggleTheme() {
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        document.documentElement.classList.add('light');
        localStorage.setItem('theme', 'light');
    } else {
        document.documentElement.classList.remove('light');
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    }
    updateThemeIcons();
}

function updateThemeIcons() {
    const isLight = document.documentElement.classList.contains('light');
    document.querySelectorAll('.theme-icon-sun').forEach(el => el.classList.toggle('hidden', isLight));
    document.querySelectorAll('.theme-icon-moon').forEach(el => el.classList.toggle('hidden', !isLight));
}

document.addEventListener('DOMContentLoaded', () => {
    updateThemeIcons();

    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    const loginToggle = document.getElementById('login-toggle');
    const mobileLoginToggle = document.getElementById('mobile-login-toggle');
    const loginForm = document.getElementById('login-form');
    const loginClose = document.getElementById('login-close');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }

    const toggleLogin = (e) => {
        e.stopPropagation();
        if (loginForm) loginForm.classList.toggle('hidden');
    };

    if (loginToggle) loginToggle.addEventListener('click', toggleLogin);
    if (mobileLoginToggle) mobileLoginToggle.addEventListener('click', toggleLogin);
    if (loginClose) loginClose.addEventListener('click', () => loginForm?.classList.add('hidden'));

    document.addEventListener('click', (e) => {
        if (loginForm && !loginForm.contains(e.target) && !loginToggle?.contains(e.target) && !mobileLoginToggle?.contains(e.target)) {
            loginForm.classList.add('hidden');
        }
    });
});
</script>
