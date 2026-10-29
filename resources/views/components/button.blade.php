@props(['href' => '#', 'variant' => 'primary'])
@php
    $styles = [
        'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700 shadow-md',
        'secondary' => 'bg-white text-indigo-600 border border-indigo-200 hover:bg-indigo-50',
        'light' => 'bg-white text-indigo-600 hover:bg-indigo-50 shadow-md',
    ];
@endphp
<a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-block rounded-lg px-5 py-2.5 text-sm font-semibold transition ' . $styles[$variant]]) }}>
    {{ $slot }}
</a>