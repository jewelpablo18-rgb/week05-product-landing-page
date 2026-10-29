@props(['name', 'price', 'features' => [], 'popular' => false, 'period' => '/set'])
<div class="relative flex flex-col rounded-2xl p-8 shadow-lg transition hover:-translate-y-1 hover:shadow-xl {{ $popular ? 'bg-amber-700 text-white' : 'border border-stone-200 bg-white' }}">
    @if ($popular)
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-amber-300 px-3 py-1 text-xs font-bold text-stone-900">Most Popular</span>
    @endif
    <h3 class="text-lg font-semibold">{{ $name }}</h3>
    <p class="mt-4 text-4xl font-extrabold">{{ $price }}<span class="text-sm font-normal opacity-70">{{ $period }}</span></p>
    <ul class="mt-6 flex-1 space-y-3 text-sm">
        @foreach ($features as $feature)
            <li class="flex gap-2"><span>&#10003;</span>{{ $feature }}</li>
        @endforeach
    </ul>
    <x-button href="#contact" :variant="$popular ? 'light' : 'primary'" class="mt-8 text-center">Subscribe</x-button>
</div>