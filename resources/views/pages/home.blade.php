@extends('layouts.app')

@section('title', 'Kape Kuya Cafe | Home')

@section('content')
    <x-hero />

    {{-- FEATURES --}}
    <section id="features" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold text-slate-900">Why customers love us</h2>
            <p class="mt-3 text-slate-600">Everything you need for a great coffee experience.</p>
        </div>
        @php
            $features = [
                ['Fresh Roasted', 'Beans roasted weekly for the best flavor.', 'M13 10V3L4 14h7v7l9-11h-7z'],
                ['Quality Ingredients', 'Locally sourced and carefully selected.', 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                ['Mobile Ordering', 'Order from your phone, skip the line.', 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z'],
                ['Loyalty Rewards', 'Earn points with every purchase.', 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'],
                ['Easy Payment', 'Cash, GCash, and card accepted.', 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z'],
                ['Friendly Support', 'Real people ready to help you.', 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z'],
            ];
        @endphp
        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($features as $f)
                <x-feature-card :title="$f[0]" :description="$f[1]" :icon="$f[2]" />
            @endforeach
        </div>
    </section>

    {{-- PRODUCT SHOWCASE --}}
    <section class="bg-slate-50">
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 py-16 sm:px-6 lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold text-slate-900">See it in action</h2>
                <ul class="mt-6 space-y-3 text-slate-600">
                    <li>&#10003; Easy online menu and ordering</li>
                    <li>&#10003; Real-time order tracking</li>
                    <li>&#10003; Works on any device</li>
                    <li>&#10003; Secure and fast checkout</li>
                </ul>
            </div>
            <div class="flex items-end justify-center gap-6">
                {{-- Dashboard preview. Pwede palitan ng <img src="/images/dashboard.png"> --}}
                <div class="w-full max-w-md rounded-xl bg-white p-4 shadow-xl ring-1 ring-slate-200">
                    <p class="mb-3 text-xs font-semibold text-slate-500">Dashboard Preview</p>
                    <div class="grid grid-cols-3 gap-3">
                        <div class="h-16 rounded bg-indigo-100"></div>
                        <div class="h-16 rounded bg-indigo-200"></div>
                        <div class="h-16 rounded bg-indigo-300"></div>
                        <div class="col-span-3 h-28 rounded bg-slate-100"></div>
                    </div>
                </div>
                {{-- Mobile view --}}
                <div class="hidden w-28 rounded-3xl bg-white p-2 shadow-xl ring-1 ring-slate-200 sm:block">
                    <p class="py-1 text-center text-[10px] font-semibold text-slate-500">Mobile View</p>
                    <div class="h-40 rounded-2xl bg-indigo-100"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- PRICING --}}
    <section id="pricing" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold text-slate-900">Simple pricing</h2>
            <p class="mt-3 text-slate-600">Pick the plan that fits you.</p>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <x-pricing-card name="Starter" price="P199" :features="['1 drink per week', 'Free pastry on birthday', 'Email support']" />
            <x-pricing-card name="Professional" price="P499" :popular="true" :features="['1 drink per day', 'Priority ordering', 'Loyalty points x2', 'Chat support']" />
            <x-pricing-card name="Enterprise" price="P1,999" :features="['Office coffee delivery', 'Custom orders', 'Dedicated account manager']" />
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section id="testimonials" class="bg-slate-50">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl font-bold text-slate-900">What our customers say</h2>
            <div class="mt-12 grid gap-6 md:grid-cols-3">
                <x-testimonial-card name="Maria Santos" position="Teacher" photo="https://i.pravatar.cc/100?img=47" review="The best coffee in our barangay. Super bait ng staff." />
                <x-testimonial-card name="Juan Dela Cruz" position="Freelancer" photo="https://i.pravatar.cc/100?img=12" review="My daily work spot. Fast wifi and masarap na latte." />
                <x-testimonial-card name="Ana Reyes" position="Nurse" photo="https://i.pravatar.cc/100?img=32" review="Mobile ordering saves me time before my shift." />
            </div>
        </div>
    </section>

    {{-- CALL TO ACTION --}}
    <section class="bg-indigo-600">
        <div class="mx-auto max-w-4xl px-4 py-16 text-center sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white">Ready to taste the difference?</h2>
            <p class="mt-3 text-indigo-100">Join our community today.</p>
            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                <x-button href="#" variant="light" class="px-6 py-3">Register</x-button>
                <x-button href="#contact" variant="light" class="px-6 py-3">Contact Sales</x-button>
                <x-button href="#" variant="secondary" class="px-6 py-3">Start Free Trial</x-button>
            </div>
        </div>
    </section>
@endsection