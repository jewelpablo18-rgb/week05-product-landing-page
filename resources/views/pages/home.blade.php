@extends('layouts.app')

@section('title', 'Hermanos Coffee - Pila | Home')

@section('content')
    <x-hero />

    {{-- FEATURES --}}
    <section id="features" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold text-stone-900">Why people love Hermanos</h2>
            <p class="mt-3 text-stone-600">A relaxed place to enjoy good coffee, with everything you need.</p>
        </div>
        @php
            $features = [
                ['Cozy Space', 'A warm and casual spot to relax or catch up.', 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-10 0h10'],
                ['Free Wi-Fi', 'Stay connected while you work or study.', 'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0'],
                ['Kids Menu', 'Food options made for the little ones.', 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                ['Pet Friendly', 'Dogs are welcome to join you.', 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                ['Dine-in, Takeout, Delivery', 'Enjoy it here, grab and go, or have it delivered.', 'M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0'],
                ['Free Parking', 'Easy parking along the street and nearby lot.', 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z'],
            ];
        @endphp
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($features as $f)
                <x-feature-card :title="$f[0]" :description="$f[1]" :icon="$f[2]" />
            @endforeach
        </div>
    </section>

    {{-- PRODUCT SHOWCASE --}}
    <section class="bg-stone-50">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold text-stone-900">Our menu, anywhere you are</h2>
                <ul class="mt-6 space-y-3 text-stone-600">
                    <li>&#10003; Coffee, tea, and other drinks</li>
                    <li>&#10003; Prepared food and kids menu</li>
                    <li>&#10003; Easy to browse on any device</li>
                    <li>&#10003; Open daily, 1PM to 10PM</li>
                </ul>
            </div>
            <div class="flex items-end justify-center gap-6">
                {{-- Menu preview. Pwede palitan ng <img src="/images/menu.png"> --}}
                <div class="w-full max-w-md rounded-xl bg-white p-4 shadow-xl ring-1 ring-stone-200">
                    <p class="mb-3 text-xs font-semibold text-stone-500">Menu Preview</p>
                    <div class="grid grid-cols-3 gap-3">
                        <div class="h-16 rounded bg-amber-100"></div>
                        <div class="h-16 rounded bg-amber-200"></div>
                        <div class="h-16 rounded bg-amber-300"></div>
                        <div class="col-span-3 h-28 rounded bg-stone-100"></div>
                    </div>
                </div>
                {{-- Mobile view --}}
                <div class="hidden w-28 rounded-3xl bg-white p-2 shadow-xl ring-1 ring-stone-200 sm:block">
                    <p class="py-1 text-center text-[10px] font-semibold text-stone-500">Mobile View</p>
                    <div class="h-40 rounded-2xl bg-amber-100"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- PRICING --}}
    <section id="pricing" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold text-stone-900">Sets and packages</h2>
            <p class="mt-3 text-stone-600">Pick the set that fits your day.</p>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <x-pricing-card name="Solo Treat" price="P150" :features="['1 coffee or tea', '1 pastry or snack', 'Free Wi-Fi']" />
            <x-pricing-card name="Barkada Pack" price="P450" :popular="true" :features="['3 drinks', '2 food items to share', 'Free Wi-Fi', 'Good for groups']" />
            <x-pricing-card name="Family Set" price="P800" :features="['2 drinks', '2 kids meals', 'Food to share', 'Dine-in or delivery']" />
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section id="testimonials" class="bg-stone-50">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl font-bold text-stone-900">What our customers say</h2>
            <div class="mt-12 grid gap-6 md:grid-cols-3">
                <x-testimonial-card name="Google Reviewer" position="Cafe Visitor" photo="https://ui-avatars.com/api/?name=G+R&background=fde68a&color=78350f" review="A cozy spot where good coffee meets good company." />
                <x-testimonial-card name="Google Reviewer" position="Remote Worker" photo="https://ui-avatars.com/api/?name=R+W&background=fcd34d&color=78350f" review="Free Wi-Fi and a relaxed place to get work done." />
                <x-testimonial-card name="Google Reviewer" position="Family Visitor" photo="https://ui-avatars.com/api/?name=F+V&background=fbbf24&color=78350f" review="Good for the whole family, with a kids menu and dogs welcome." />
            </div>
        </div>
    </section>

    {{-- CALL TO ACTION --}}
    <section class="bg-amber-800">
        <div class="mx-auto max-w-4xl px-4 py-16 text-center sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white">Ready for your next cup?</h2>
            <p class="mt-3 text-amber-100">Drop by in Pila or order for delivery.</p>
            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                <x-button href="#" variant="light" class="px-6 py-3">Register</x-button>
                <x-button href="#contact" variant="light" class="px-6 py-3">Contact Sales</x-button>
                <x-button href="#" variant="secondary" class="px-6 py-3">Start Free Trial</x-button>
            </div>
        </div>
    </section>
@endsection