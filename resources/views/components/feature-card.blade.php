@props(['title', 'description', 'icon'])
<div class="rounded-2xl border border-stone-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-100 text-amber-800">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}" />
        </svg>
    </div>
    <h3 class="mt-4 text-lg font-semibold text-stone-900">{{ $title }}</h3>
    <p class="mt-2 text-sm text-stone-600">{{ $description }}</p>
</div>