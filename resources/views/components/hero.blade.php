@props([
    'name' => 'Hermanos Coffee - Pila',
    'headline' => 'Where good coffee meets good company.',
    'description' => 'A cozy coffee spot in Pila, Laguna. Great coffee, good food, and a relaxed place for friends, family, and even your dog.',
])
<section id="home" class="bg-gradient-to-b from-amber-50 to-white">
    <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-16 sm:px-6 md:grid-cols-2 lg:px-8 lg:py-24">
        <div class="text-center md:text-left">
            <p class="text-sm font-semibold uppercase tracking-wide text-amber-800">{{ $name }}</p>
            <h1 class="mt-3 text-4xl font-extrabold tracking-tight text-stone-900 sm:text-5xl lg:text-6xl">{{ $headline }}</h1>
            <p class="mt-5 text-lg text-stone-600">{{ $description }}</p>
            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row md:justify-start">
                <x-button href="#contact" class="px-6 py-3 text-center">Visit Us</x-button>
                <x-button href="#pricing" variant="secondary" class="px-6 py-3 text-center">See Our Sets</x-button>
            </div>
        </div>

        {{-- Mockup. Pwede palitan ng <img src="/images/hero.png"> --}}
        <div class="mx-auto w-full max-w-md rounded-2xl bg-white p-4 shadow-2xl ring-1 ring-stone-200">
            <div class="mb-4 flex gap-2">
                <span class="h-3 w-3 rounded-full bg-red-400"></span>
                <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                <span class="h-3 w-3 rounded-full bg-green-400"></span>
            </div>
            <div class="grid grid-cols-3 gap-3">
                <div class="h-20 rounded-lg bg-amber-100"></div>
                <div class="h-20 rounded-lg bg-amber-200"></div>
                <div class="h-20 rounded-lg bg-amber-300"></div>
                <div class="col-span-3 h-32 rounded-lg bg-stone-100"></div>
            </div>
        </div>
    </div>
</section>