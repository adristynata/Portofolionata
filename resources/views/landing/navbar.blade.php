<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            
            <!-- Logo -->
            <div class="text-xl font-bold text-gray-800">
                MyPorto
            </div>

            <!-- Menu -->
            <div class="hidden md:flex space-x-6">
                <a href="#home" class="text-gray-600 hover:text-blue-500">Home</a>
                <a href="#about" class="text-gray-600 hover:text-blue-500">About</a>
                <a href="#skill" class="text-gray-600 hover:text-blue-500">Skill</a>
                <a href="#project" class="text-gray-600 hover:text-blue-500">Project</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-500">Contact</a>
            </div>

            <!-- Button Mobile -->
            <div class="md:hidden">
                <button id="menu-btn" class="text-gray-600 focus:outline-none">
                    ☰
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="menu" class="hidden md:hidden px-4 pb-4">
        <a href="#home" class="block py-2 text-gray-600 hover:text-blue-500">Home</a>
        <a href="#about" class="block py-2 text-gray-600 hover:text-blue-500">About</a>
        <a href="#skill" class="block py-2 text-gray-600 hover:text-blue-500">Skill</a>
        <a href="#project" class="block py-2 text-gray-600 hover:text-blue-500">Project</a>
        <a href="#contact" class="block py-2 text-gray-600 hover:text-blue-500">Contact</a>
    </div>
</nav>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>