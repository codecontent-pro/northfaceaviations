<script setup>
import { Link } from '@inertiajs/vue3';
import PagesLayout from '@/layouts/PagesLayout.vue';
import PagesController from '@/actions/App/Http/Controllers/PagesController';

const cargoStreams = [
    { title: 'Time-Critical Parts', detail: 'Rapid uplift for aviation, oil and gas, and industrial supply chains.' },
    { title: 'Medical & Humanitarian', detail: 'Coordinated movement for relief, health systems, and essential stock.' },
    { title: 'Project Cargo', detail: 'Structured planning for oversized and sensitive operational consignments.' },
    { title: 'General Commercial', detail: 'Scalable cargo capacity for scheduled and ad hoc commercial demand.' },
];

const assurance = [
    'Route and permit planning for domestic and cross-border movement',
    'Load integrity controls and handling oversight',
    'Documentation and customs workflow support',
    'Milestone visibility from dispatch to delivery',
];
</script>

<template>
    <PagesLayout>
        <section class="bg-slate-950 text-white pt-32 pb-24 px-6 md:px-16">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-12 gap-8 items-end">
                    <div class="lg:col-span-7 space-y-6">
                        <p class="text-orange-300 uppercase tracking-[0.2em] text-xs font-semibold">Air Cargo Logistics
                        </p>
                        <h1 class="text-4xl md:text-6xl font-black leading-tight">Cargo Operations Built For Speed And
                            Control</h1>
                        <p class="text-gray-300 text-lg max-w-3xl leading-relaxed">
                            We deliver reliable air cargo execution for urgent, high-value, and specialized shipments,
                            combining operational discipline with clear stakeholder visibility.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <Link :href="PagesController.contact()"
                                class="bg-orange-400 hover:bg-orange-500 px-7 py-3 rounded-full font-semibold transition">
                                Plan Cargo Mission
                            </Link>
                            <a href="tel:+2348032157301"
                                class="border border-white/25 hover:border-orange-300 hover:text-orange-200 px-7 py-3 rounded-full font-semibold transition">
                                Contact Cargo Control
                            </a>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <img src="/cargo_1.jpeg" alt="Cargo loading operation"
                            class="w-full h-[360px] object-cover rounded-3xl border border-white/15" />
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-black text-white px-6 md:px-16 py-20">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-10">Cargo Streams We Support</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <article v-for="item in cargoStreams" :key="item.title"
                        class="rounded-3xl border border-white/10 bg-slate-900/70 p-7 hover:border-orange-300/50 transition">
                        <h3 class="text-2xl font-bold mb-3">{{ item.title }}</h3>
                        <p class="text-sm text-gray-300 leading-relaxed">{{ item.detail }}</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="bg-slate-950 text-white px-6 md:px-16 pb-24">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-8 items-start">
                <div class="lg:col-span-2 rounded-3xl border border-white/10 bg-white/5 p-7">
                    <p class="text-xs uppercase tracking-wide text-orange-300">Operational Assurance</p>
                    <h3 class="text-2xl font-bold mt-2 mb-5">Execution Standards</h3>
                    <ul class="space-y-4">
                        <li v-for="item in assurance" :key="item" class="flex gap-3 items-start text-sm text-gray-200">
                            <span class="mt-1 h-2.5 w-2.5 rounded-full bg-orange-300"></span>
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                </div>
                <div class="lg:col-span-3 rounded-3xl overflow-hidden border border-white/10">
                    <img src="/cargo_2.jpeg" alt="Global cargo transfer planning"
                        class="w-full h-[420px] object-cover" />
                </div>
            </div>
        </section>
    </PagesLayout>
</template>
