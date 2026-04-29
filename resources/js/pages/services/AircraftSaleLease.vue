<script setup>
import { Link } from '@inertiajs/vue3';
import PagesLayout from '@/layouts/PagesLayout.vue';
import PagesController from '@/actions/App/Http/Controllers/PagesController';

const tracks = [
    {
        title: 'Buy',
        body: 'Aircraft sourcing, technical due diligence, and valuation-led negotiation support.',
    },
    {
        title: 'Sell',
        body: 'Positioning, buyer screening, offer management, and structured closing coordination.',
    },
    {
        title: 'Lease',
        body: 'Commercial structuring, term review, and practical transition support from start to finish.',
    },
];

const commitments = [
    'Market intelligence and valuation context',
    'Risk-focused document and records review',
    'Transaction coordination with key stakeholders',
    'Clear advisory support from briefing to close',
];
</script>

<template>
    <PagesLayout>
        <section class="relative bg-black text-white pt-32 pb-24 px-6 md:px-16 overflow-hidden">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_20%_10%,rgba(251,146,60,0.22),transparent_35%),radial-gradient(circle_at_80%_90%,rgba(56,189,248,0.14),transparent_35%)]">
            </div>
            <div class="relative max-w-7xl mx-auto grid lg:grid-cols-2 gap-10 items-center">
                <div class="space-y-6">
                    <p class="text-orange-300 uppercase tracking-[0.2em] text-xs font-semibold">Aircraft Sale and Lease
                    </p>
                    <h1 class="text-4xl md:text-6xl font-black leading-tight">Transaction Confidence At Every Stage</h1>
                    <p class="text-lg text-gray-300 leading-relaxed max-w-2xl">
                        We support buyers, sellers, and lessors with structured aviation transaction advisory,
                        combining technical review with commercial strategy.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <Link :href="PagesController.contact()"
                            class="bg-orange-400 hover:bg-orange-500 px-7 py-3 rounded-full font-semibold transition">
                            Start Transaction Discussion
                        </Link>
                        <a href="tel:+2348032157301"
                            class="border border-white/25 hover:border-orange-300 hover:text-orange-200 px-7 py-3 rounded-full font-semibold transition">
                            Speak To Advisory Team
                        </a>
                    </div>
                </div>
                <img src="https://images.unsplash.com/photo-1517479149777-5f3b1511d5ad?auto=format&fit=crop&q=80&w=1600"
                    alt="Aircraft transaction advisory"
                    class="w-full h-[420px] rounded-3xl object-cover border border-white/10" />
            </div>
        </section>

        <section class="bg-slate-950 text-white px-6 md:px-16 py-20">
            <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-6">
                <article v-for="item in tracks" :key="item.title"
                    class="rounded-3xl border border-white/10 bg-white/5 p-7">
                    <h2 class="text-3xl font-black mb-4 text-orange-200">{{ item.title }}</h2>
                    <p class="text-sm text-gray-300 leading-relaxed">{{ item.body }}</p>
                </article>
            </div>
        </section>

        <section class="bg-black text-white px-6 md:px-16 pb-24">
            <div
                class="max-w-7xl mx-auto rounded-3xl border border-white/10 bg-gradient-to-r from-slate-900 to-slate-800 p-8 md:p-12 grid lg:grid-cols-3 gap-8 items-center">
                <div class="lg:col-span-1">
                    <h3 class="text-3xl font-bold">Our Advisory Commitments</h3>
                </div>
                <ul class="lg:col-span-2 grid md:grid-cols-2 gap-4">
                    <li v-for="item in commitments" :key="item"
                        class="rounded-2xl border border-white/10 bg-white/5 p-4 text-sm text-gray-200">
                        {{ item }}
                    </li>
                </ul>
            </div>
        </section>
    </PagesLayout>
</template>
