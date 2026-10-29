<header class="sticky top-0 z-50 border-b border-stone-200 bg-white/90 backdrop-blur">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <a href="#home" class="text-xl font-bold text-amber-800">Hermanos Coffee</a>

        <ul class="hidden items-center gap-8 text-sm font-medium text-stone-600 md:flex">
            <li><a href="#home" class="hover:text-amber-800">Home</a></li>
            <li><a href="#features" class="hover:text-amber-800">Features</a></li>
            <li><a href="#pricing" class="hover:text-amber-800">Pricing</a></li>
            <li><a href="#testimonials" class="hover:text-amber-800">Testimonials</a></li>
            <li><a href="#contact" class="hover:text-amber-800">Contact</a></li>
        </ul>

        <div class="hidden items-center gap-3 md:flex">
            <x-button href="#" variant="secondary">Sign In</x-button>
            <x-button href="#contact">Get Started</x-button>
        </div>

        <button id="menu-btn" class="rounded-lg p-2 hover:bg-stone-100 md:hidden" aria-label="Toggle menu">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden space-y-3 border-t border-stone-200 px-4 py-4 text-sm font-medium md:hidden">
        <a href="#home" class="block">Home</a>
        <a href="#features" class="block">Features</a>
        <a href="#pricing" class="block">Pricing</a>
        <a href="#testimonials" class="block">Testimonials</a>
        <a href="#contact" class="block">Contact</a>
        <div class="flex gap-3 pt-2">
            <x-button href="#" variant="secondary">Sign In</x-button>
            <x-button href="#contact">Get Started</x-button>
        </div>
    </div>

    <script>
        document.getElementById('menu-btn').addEventListener('click', () =>
            document.getElementById('mobile-menu').classList.toggle('hidden'));
    </script>
</header>