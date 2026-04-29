<script setup>
import { Link } from '@inertiajs/vue3';
import PagesLayout from '@/layouts/PagesLayout.vue';
import PagesController from '@/actions/App/Http/Controllers/PagesController';

const charterTypes = [
    {
        title: 'Executive Charter',
        text: 'Efficient business missions with privacy, schedule control, and seamless transfers.',
    },
    {
        title: 'Leisure Charter',
        text: 'Premium personal travel with tailored cabin preferences and concierge-style support.',
    },
    {
        title: 'Jet + Helicopter Combo',
        text: 'Integrated long-range and short-hop legs for flexible city and remote destination access.',
    },
];

const advantages = [
    'Direct airport access with fewer bottlenecks',
    'Flexible departure windows and route personalization',
    'Confidential, high-comfort passenger experience',
    'Dedicated charter advisor from briefing to touchdown',
];
</script>

<template>
    <PagesLayout>
        <section class="relative bg-black text-white pt-32 pb-24 px-6 md:px-16 overflow-hidden">
            <div
                class="absolute inset-0 opacity-50 bg-[linear-gradient(130deg,rgba(251,146,60,0.25),transparent_35%,rgba(56,189,248,0.15))]">
            </div>
            <div class="relative max-w-7xl mx-auto grid lg:grid-cols-2 gap-10 items-center">
                <div class="space-y-6">
                    <p class="text-orange-300 uppercase tracking-[0.2em] text-xs font-semibold">Private Jet and
                        Helicopter Charter</p>
                    <h1 class="text-4xl md:text-6xl font-black leading-tight">A Premium Way To Move</h1>
                    <p class="text-gray-300 text-lg leading-relaxed max-w-xl">
                        Fly on your terms with tailored charter planning built around your timeline, destination,
                        and service preferences. Every mission is delivered with discretion and precision.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <Link :href="PagesController.contact()"
                            class="bg-orange-400 hover:bg-orange-500 px-7 py-3 rounded-full font-semibold transition">
                            Request Charter Quote
                        </Link>
                        <a href="tel:+2348032157301"
                            class="border border-white/20 hover:border-orange-300 hover:text-orange-200 px-7 py-3 rounded-full font-semibold transition">
                            Speak To Charter Desk
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1540962351504-03099e0a754b?auto=format&fit=crop&q=80&w=1200"
                        alt="Private jet at terminal"
                        class="col-span-2 rounded-3xl h-64 w-full object-cover border border-white/15" />
                    <img src="https://images.unsplash.com/photo-1570710891163-6d3b5c47248b?auto=format&fit=crop&q=80&w=900"
                        alt="Jet ready for departure"
                        class="rounded-2xl h-44 w-full object-cover border border-white/15" />
                    <div
                        class="rounded-2xl h-44 bg-slate-900/80 border border-white/10 p-5 flex flex-col justify-between">
                        <p class="text-xs uppercase tracking-wide text-orange-300">Response Window</p>
                        <p class="text-3xl font-extrabold">Fast Quote</p>
                        <p class="text-xs text-gray-400">Rapid availability check and route recommendation.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-slate-950 text-white px-6 md:px-16 py-20">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-10">Charter Profiles</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <article v-for="item in charterTypes" :key="item.title"
                        class="rounded-3xl border border-white/10 bg-white/5 p-7 hover:-translate-y-1 transition">
                        <h3 class="text-2xl font-bold mb-3">{{ item.title }}</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">{{ item.text }}</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="bg-black text-white px-6 md:px-16 pb-24">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-10 items-center">
                <div class="rounded-3xl border border-white/10 bg-gradient-to-br from-slate-900 to-slate-800 p-8">
                    <h3 class="text-2xl font-bold mb-6">Why Clients Choose This Service</h3>
                    <ul class="space-y-4">
                        <li v-for="item in advantages" :key="item" class="flex gap-3 items-start">
                            <span class="mt-1 h-2.5 w-2.5 rounded-full bg-orange-300"></span>
                            <span class="text-gray-200 text-sm">{{ item }}</span>
                        </li>
                    </ul>
                </div>
                <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&q=80&w=1400"
                    alt="Private cabin experience"
                    class="w-full h-[380px] rounded-3xl object-cover border border-white/10" />
            </div>
        </section>
    </PagesLayout>
</template>
