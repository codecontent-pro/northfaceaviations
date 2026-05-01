<script setup>
import { Link } from '@inertiajs/vue3';
import PagesLayout from '@/layouts/PagesLayout.vue';
import PagesController from '@/actions/App/Http/Controllers/PagesController';

const pillars = [
    { title: 'Compliance Governance', value: '100%', text: 'Structured oversight across manuals, records, and regulatory obligations.' },
    { title: 'Maintenance Control', value: '360', text: 'Lifecycle tracking for scheduled checks, components, and airworthiness status.' },
    { title: 'Cost Visibility', value: 'Live', text: 'Operational spend and utilization reporting for informed owner decisions.' },
];

const services = [
    'Crew planning and roster readiness management',
    'Maintenance vendor coordination and quality checks',
    'Flight operations control and mission standards',
    'Owner reporting with utilization and performance insights',
];
</script>

<template>
    <PagesLayout>
        <section class="bg-slate-950 text-white pt-32 pb-20 px-6 md:px-16">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-8 items-start">
                <div class="lg:col-span-2 space-y-6">
                    <p class="text-orange-300 uppercase tracking-[0.2em] text-xs font-semibold">Aircraft Management</p>
                    <h1 class="text-4xl md:text-6xl font-black leading-tight">Operational Control For High-Value Assets
                    </h1>
                    <p class="text-lg text-gray-300 max-w-3xl leading-relaxed">
                        We manage aircraft operations end-to-end so owners can protect value, maintain compliance,
                        and operate with confidence. Our framework combines technical discipline with executive
                        visibility.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <Link :href="PagesController.contact()"
                            class="bg-orange-400 hover:bg-orange-500 px-7 py-3 rounded-full font-semibold transition">
                            Request Management Briefing
                        </Link>
                        <a href="tel:+2348032157301"
                            class="border border-white/25 hover:border-orange-300 hover:text-orange-200 px-7 py-3 rounded-full font-semibold transition">
                            Talk To Operations
                        </a>
                    </div>
                </div>
                <div class="rounded-3xl overflow-hidden border border-white/10">
                    <img src="/craft_management_2.jpeg" alt="Aircraft operations and management"
                        class="w-full h-[320px] object-cover" />
                </div>
            </div>
        </section>

        <section class="bg-black text-white px-6 md:px-16 py-20">
            <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-6">
                <article v-for="item in pillars" :key="item.title"
                    class="rounded-3xl border border-white/10 bg-white/5 p-7">
                    <p class="text-xs uppercase tracking-wide text-orange-300">{{ item.title }}</p>
                    <p class="text-4xl font-black mt-3">{{ item.value }}</p>
                    <p class="text-sm text-gray-300 mt-3 leading-relaxed">{{ item.text }}</p>
                </article>
            </div>
        </section>

        <section class="bg-slate-950 text-white px-6 md:px-16 pb-24">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-10 items-center">
                <div class="rounded-3xl border border-white/10 bg-gradient-to-br from-slate-900 to-slate-800 p-8">
                    <h2 class="text-3xl font-bold mb-6">Core Service Modules</h2>
                    <ul class="space-y-4">
                        <li v-for="item in services" :key="item" class="flex gap-3 items-start text-sm text-gray-200">
                            <span class="mt-1 h-2.5 w-2.5 rounded-full bg-orange-300"></span>
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                </div>
                <img src="https://images.unsplash.com/photo-1474302770737-173ee21bab63?auto=format&fit=crop&q=80&w=1600"
                    alt="Aviation operations dashboard"
                    class="w-full h-[380px] rounded-3xl object-cover border border-white/10" />
            </div>
        </section>
    </PagesLayout>
</template>
