<nav class="fixed top-0 left-0 w-full z-50 backdrop-blur-md"
    style="background: rgba(10,15,44,0.7); border-bottom: 1px solid rgba(255,255,255,0.05);">

    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">
            
            <!-- Logo -->
            <div class="text-lg font-semibold tracking-wide text-white">
                Portofolio<span style="color: var(--navy-accent);">|</span>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex space-x-8 text-sm">
                <a href="#home" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#skill" class="nav-link">Skill</a>
                <a href="#project" class="nav-link">Project</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>


            <!-- Button kanan - Auth/Login -->
            <div class="hidden md:block">
                @auth
                    <!-- Dropdown logged in -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium transition hover:scale-105 bg-white/10 backdrop-blur-sm border border-white/20 text-white hover:bg-white/20">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            {{ Auth::user()->name }}
                            <svg x-show="!open" class="w-4 h-4 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                            <svg x-show="open" class="w-4 h-4 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white/95 backdrop-blur-sm border border-white/20 z-50" style="background: rgba(255,255,255,0.95);">
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-900 hover:bg-gray-100 transition">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-900 hover:bg-gray-100 transition">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Login button - triggers form -->
                    <button id="login-toggle" class="px-5 py-2 rounded-lg text-sm font-medium transition hover:scale-105 ml-2" style="background: var(--navy-accent); color: white;">Login</button>
                @endauth
            </div>

            <!-- Login Form (hidden) -->
            <div id="login-form" class="hidden absolute top-full right-0 mt-2 w-80 bg-white/95 backdrop-blur-sm rounded-lg shadow-xl border border-white/20 p-6 z-50 md:right-6" style="background: rgba(255,255,255,0.95);">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Login to Dashboard</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="your@email.com">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" name="password" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Password">
                    </div>
                    <div class="mb-6 flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition font-medium">Log in</button>
                </form>
                </p>
                <button id="login-close" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
            </div>


            <!-- Hamburger -->
            <div class="md:hidden">
                <button id="menu-btn" class="text-white text-xl">
                    ☰
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="menu"
        class="hidden md:hidden px-6 pb-6 flex flex-col gap-4 text-sm"
        style="background: rgba(10,15,44,0.95);">

        <a href="#home" class="nav-link">Home</a>
        <a href="#about" class="nav-link">About</a>
        <a href="#skill" class="nav-link">Skill</a>
        <a href="#project" class="nav-link">Project</a>
        <a href="#contact" class="nav-link">Contact</a>


        @auth
            <a href="{{ route('dashboard') }}" class="block py-2 px-4 text-white hover:text-white/80 transition mb-2">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}" class="inline-block">
                @csrf
                <button type="submit" class="w-full text-left py-2 px-4 text-white hover:text-white/80 transition text-sm">Logout</button>
            </form>
        @else
            <button id="mobile-login-toggle" class="text-center px-5 py-2 rounded-lg text-sm font-medium" style="background: var(--navy-accent); color: white;">Login</button>
        @endauth

    </div>
</nav>

<style>
.nav-link {
    color: var(--muted);
    position: relative;
    transition: 0.3s;
}

.nav-link:hover {
    color: white;
}

.nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 0%;
    height: 2px;
    background: var(--navy-accent);
    transition: 0.3s;
}

.nav-link:hover::after {
    width: 100%;
}
</style>

<script>
const btn = document.getElementById('menu-btn');
const menu = document.getElementById('menu');

btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});

    </script>

    <!-- Auth scripts -->
    <script src="https://unpkg.com/@preline/preline@3.0.0/dist/preline.min.js"></script> <!-- For transitions if needed -->
    <script>
        // Login form toggle desktop/mobile
        const loginToggle = document.getElementById('login-toggle');
        const mobileLoginToggle = document.getElementById('mobile-login-toggle');
        const loginForm = document.getElementById('login-form');
        const loginClose = document.getElementById('login-close');

        if (loginToggle) loginToggle.addEventListener('click', () => loginForm.classList.toggle('hidden'));
        if (mobileLoginToggle) mobileLoginToggle.addEventListener('click', () => loginForm.classList.toggle('hidden'));
        if (loginClose) loginClose.addEventListener('click', () => loginForm.classList.add('hidden'));

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (!loginForm.contains(e.target) && !loginToggle?.contains(e.target) && !mobileLoginToggle?.contains(e.target)) {
                loginForm.classList.add('hidden');
            }
        });

        // Navbar scroll behavior
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 10) {
                navbar.style.background = 'rgba(10,15,44,0.95)';
            } else {
                navbar.style.background = 'rgba(10,15,44,0.7)';
            }
        });
    </script>

