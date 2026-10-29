@props(['href' => '#', 'variant' => 'primary'])
@php
    $styles = [
        'primary' => 'bg-amber-700 text-white hover:bg-amber-800 shadow-md',
        'secondary' => 'bg-white text-amber-800 border border-amber-300 hover:bg-amber-50',
        'light' => 'bg-white text-amber-800 hover:bg-amber-50 shadow-md',
    ];
@endphp
<a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-block rounded-lg px-5 py-2.5 text-sm font-semibold transition ' . $styles[$variant]]) }}>
    {{ $slot }}
</a>