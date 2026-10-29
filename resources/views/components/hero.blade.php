@props(['name' => 'Kape Kuya Cafe', 'headline' => 'Fresh coffee, made with malasakit.', 'description' => 'Locally roasted coffee and homemade pastries, now easier to order online.'])
<section id="home" class="bg-gradient-to-b from-indigo-50 to-white">
    <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-16 sm:px-6 md:grid-cols-2 lg:px-8 lg:py-24">
        <div class="text-center md:text-left">
            <p class="text-sm font-semibold uppercase tracking-wide text-indigo-600">{{ $name }}</p>
            <h1 class="mt-3 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">{{ $headline }}</h1>
            <p class="mt-5 text-lg text-slate-600">{{ $description }}</p>
            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row md:justify-start">
                <x-button href="#contact" class="px-6 py-3 text-center">Order Now</x-button>
                <x-button href="#features" variant="secondary" class="px-6 py-3 text-center">Learn More</x-button>
            </div>
        </div>

        {{-- Mockup. Pwede palitan ng <img src="/images/hero.png"> --}}
        <div class="mx-auto w-full max-w-md rounded-2xl bg-white p-4 shadow-2xl ring-1 ring-slate-200">
            <div class="mb-4 flex gap-2">
                <span class="h-3 w-3 rounded-full bg-red-400"></span>
                <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                <span class="h-3 w-3 rounded-full bg-green-400"></span>
            </div>
            <div class="grid grid-cols-3 gap-3">
                <div class="h-20 rounded-lg bg-indigo-100"></div>
                <div class="h-20 rounded-lg bg-indigo-200"></div>
                <div class="h-20 rounded-lg bg-indigo-300"></div>
                <div class="col-span-3 h-32 rounded-lg bg-slate-100"></div>
            </div>
        </div>
    </div>
</section>