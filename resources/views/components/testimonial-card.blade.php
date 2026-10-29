@props(['name', 'position', 'photo', 'review'])
<div class="rounded-2xl border border-stone-200 bg-white p-6 shadow-sm transition hover:shadow-lg">
    <p class="text-stone-600">"{{ $review }}"</p>
    <div class="mt-6 flex items-center gap-4">
        <img src="{{ $photo }}" alt="{{ $name }}" class="h-12 w-12 rounded-full object-cover">
        <div>
            <p class="font-semibold text-stone-900">{{ $name }}</p>
            <p class="text-sm text-stone-500">{{ $position }}</p>
        </div>
    </div>
</div>