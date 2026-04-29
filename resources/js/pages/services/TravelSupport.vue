<script setup>
import { Link } from '@inertiajs/vue3';
import PagesLayout from '@/layouts/PagesLayout.vue';
import PagesController from '@/actions/App/Http/Controllers/PagesController';

const journey = [
    { step: 'Step 1', title: 'Trip Blueprint', text: 'We map your dates, priorities, and traveler profile.' },
    { step: 'Step 2', title: 'Booking Layer', text: 'Flights, hotels, and transfers are coordinated into one itinerary.' },
    { step: 'Step 3', title: 'Document Support', text: 'Visa and travel requirement guidance is prepared ahead of departure.' },
    { step: 'Step 4', title: 'Live Assistance', text: 'Our team supports schedule changes and travel updates in real time.' },
];

const deliverables = [
    'Flight booking optimization for convenience and timing',
    'Hotel reservation support by location and preference',
    'Airport transfer coordination for smooth arrivals',
    'Visa assistance and travel preparation guidance',
];
</script>

<template>
    <PagesLayout>
        <section class="bg-slate-950 text-white pt-32 pb-24 px-6 md:px-16">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-10 items-center">
                <div class="lg:col-span-3 space-y-6">
                    <p class="text-orange-300 uppercase tracking-[0.2em] text-xs font-semibold">Travel Support Services
                    </p>
                    <h1 class="text-4xl md:text-6xl font-black leading-tight">From Booking To Arrival, Fully Coordinated
                    </h1>
                    <p class="text-gray-300 text-lg max-w-2xl leading-relaxed">
                        We simplify complex travel plans through one integrated support channel for flights,
                        accommodation, transfers, and visa guidance.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <Link :href="PagesController.contact()"
                            class="bg-orange-400 hover:bg-orange-500 px-7 py-3 rounded-full font-semibold transition">
                            Request Travel Coordination
                        </Link>
                        <a href="tel:+2348032157301"
                            class="border border-white/25 hover:border-orange-300 hover:text-orange-200 px-7 py-3 rounded-full font-semibold transition">
                            Speak To Travel Desk
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&q=80&w=1400"
                        alt="Travel support planning"
                        class="w-full h-[420px] rounded-3xl object-cover border border-white/10" />
                </div>
            </div>
        </section>

        <section class="bg-black text-white px-6 md:px-16 py-20">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-10">Journey Management Framework</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">
                    <article v-for="item in journey" :key="item.title"
                        class="rounded-3xl border border-white/10 bg-white/5 p-6">
                        <p class="text-xs uppercase tracking-wide text-orange-300">{{ item.step }}</p>
                        <h3 class="text-xl font-bold mt-2 mb-3">{{ item.title }}</h3>
                        <p class="text-sm text-gray-300 leading-relaxed">{{ item.text }}</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="bg-slate-950 text-white px-6 md:px-16 pb-24">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-10 items-center">
                <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&q=80&w=1500"
                    alt="Business travel planning"
                    class="w-full h-[360px] rounded-3xl object-cover border border-white/10" />
                <div class="rounded-3xl border border-white/10 bg-slate-900/70 p-8">
                    <h3 class="text-3xl font-bold mb-6">Key Deliverables</h3>
                    <ul class="space-y-4">
                        <li v-for="item in deliverables" :key="item"
                            class="flex gap-3 items-start text-sm text-gray-200">
                            <span class="mt-1 h-2.5 w-2.5 rounded-full bg-orange-300"></span>
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </PagesLayout>
</template>
