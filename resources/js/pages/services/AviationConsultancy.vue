<script setup>
import { Link } from '@inertiajs/vue3';
import PagesLayout from '@/layouts/PagesLayout.vue';
import PagesController from '@/actions/App/Http/Controllers/PagesController';

const expertise = [
    {
        title: 'Regulatory Advisory',
        text: 'Guidance on approvals, compliance strategy, and operational governance.'
    },
    {
        title: 'Operational Improvement',
        text: 'Process optimization for dispatch, route planning, and performance management.'
    },
    {
        title: 'Safety and Quality Systems',
        text: 'Practical improvements to safety assurance and quality management structures.'
    },
    {
        title: 'Strategic Growth Planning',
        text: 'Commercial and operational direction for scale, restructuring, and market expansion.'
    },
];

const engagementModel = [
    'Discovery workshop and baseline assessment',
    'Advisory blueprint with milestones and ownership',
    'Execution support with periodic review checkpoints',
];
</script>

<template>
    <PagesLayout>
        <section class="relative bg-black text-white pt-32 pb-24 px-6 md:px-16 overflow-hidden">
            <div
                class="absolute inset-0 bg-[linear-gradient(110deg,rgba(56,189,248,0.18),transparent_40%,rgba(251,146,60,0.2))]">
            </div>
            <div class="relative max-w-7xl mx-auto grid lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-6">
                    <p class="text-orange-300 uppercase tracking-[0.2em] text-xs font-semibold">Aviation Consultancy</p>
                    <h1 class="text-4xl md:text-6xl font-black leading-tight">Strategic Advisory With Real Operational
                        Context</h1>
                    <p class="text-lg text-gray-300 max-w-3xl leading-relaxed">
                        We help operators, investors, and aviation teams solve complex strategic and operational
                        challenges through practical, implementation-focused consulting.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <Link :href="PagesController.contact()"
                            class="bg-orange-400 hover:bg-orange-500 px-7 py-3 rounded-full font-semibold transition">
                            Book Advisory Session
                        </Link>
                        <a href="tel:+2348032157301"
                            class="border border-white/25 hover:border-orange-300 hover:text-orange-200 px-7 py-3 rounded-full font-semibold transition">
                            Speak To Consultants
                        </a>
                    </div>
                </div>
                <div class="lg:col-span-5 rounded-3xl border border-white/10 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=80&w=1600"
                        alt="Aviation consultancy workshop" class="w-full h-[420px] object-cover" />
                </div>
            </div>
        </section>

        <section class="bg-slate-950 text-white px-6 md:px-16 py-20">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-10">Advisory Capabilities</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <article v-for="item in expertise" :key="item.title"
                        class="rounded-3xl border border-white/10 bg-white/5 p-7 hover:border-orange-300/50 transition">
                        <h3 class="text-2xl font-bold mb-3">{{ item.title }}</h3>
                        <p class="text-sm text-gray-300 leading-relaxed">{{ item.text }}</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="bg-black text-white px-6 md:px-16 pb-24">
            <div
                class="max-w-7xl mx-auto rounded-3xl border border-white/10 bg-gradient-to-r from-slate-900 to-slate-800 p-8 md:p-12 grid lg:grid-cols-3 gap-8 items-center">
                <div>
                    <p class="text-xs uppercase tracking-wide text-orange-300">Engagement Model</p>
                    <h3 class="text-3xl font-bold mt-2">How We Work</h3>
                </div>
                <ol class="lg:col-span-2 space-y-4 list-decimal list-inside text-gray-200">
                    <li v-for="item in engagementModel" :key="item" class="text-sm">{{ item }}</li>
                </ol>
            </div>
        </section>
    </PagesLayout>
</template>
