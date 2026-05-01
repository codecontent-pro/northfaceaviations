<script setup>
import { Link } from '@inertiajs/vue3';
import PagesLayout from '@/layouts/PagesLayout.vue';
import PagesController from '@/actions/App/Http/Controllers/PagesController';

const northstarStrengths = [
    {
        title: 'Aviation and Medical Coordination',
        text: 'Northstar Aviation brings together flight operations, medical communication, and logistics control so every transfer is handled as one connected mission.',
    },
    {
        title: 'Safety-Led Mission Planning',
        text: 'Every air ambulance movement is built around patient condition, flight feasibility, airport access, and the clinical requirements of the receiving facility.',
    },
    {
        title: 'Responsive Communication',
        text: 'Families, hospitals, insurers, and corporate stakeholders receive clear updates throughout the process, reducing uncertainty during high-stress situations.',
    },
];

const serviceCoverage = [
    {
        title: 'Emergency Evacuation',
        text: 'For urgent patient transfers requiring fast deployment, clinical stabilization, and direct movement to a receiving hospital.',
    },
    {
        title: 'Inter-Hospital Transfer',
        text: 'For patients who need specialist treatment, advanced diagnostics, or continuity of care in another city or country.',
    },
    {
        title: 'Medical Repatriation',
        text: 'For clients who need to be returned safely to their home country or a preferred treatment center under medical supervision.',
    },
    {
        title: 'Remote Access Response',
        text: 'For hard-to-reach locations where road transfer is slow, impractical, or unsafe for the patient’s condition.',
    },
    {
        title: 'Clinical Escort Coordination',
        text: 'For cases requiring experienced onboard medical personnel, equipment setup, and receiving-team handover support.',
    },
    {
        title: 'Cross-Border Operations',
        text: 'For regional and international missions involving route planning, permit handling, and multi-party coordination.',
    },
];

const trustPoints = [
    'Experienced coordination between flight and medical teams',
    'Strong focus on patient comfort, safety, and continuity of care',
    'Professional communication with hospitals, families, and institutions',
    'Operational readiness for domestic and international air ambulance missions',
];
</script>

<template>
    <PagesLayout>
        <section class="relative overflow-hidden bg-slate-950 text-white pt-32 pb-24 px-6 md:px-16">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_15%_20%,rgba(251,146,60,0.25),transparent_40%),radial-gradient(circle_at_85%_10%,rgba(56,189,248,0.15),transparent_35%)]">
            </div>
            <div class="relative max-w-7xl mx-auto grid lg:grid-cols-5 gap-10 items-center">
                <div class="lg:col-span-3 space-y-7">
                    <p class="uppercase tracking-[0.2em] text-orange-300 text-xs font-semibold">Air Ambulance Operations
                    </p>
                    <h1 class="text-4xl md:text-6xl font-black leading-tight">Rapid Medical Airlift With Clinical
                        Precision</h1>
                    <p class="text-gray-300 text-lg leading-relaxed max-w-2xl">
                        When minutes define outcomes, our team deploys coordinated air ambulance missions with ICU-grade
                        support, tight operational control, and hospital-level continuity of care.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <Link :href="PagesController.contact()"
                            class="bg-orange-400 hover:bg-orange-500 text-white font-semibold px-7 py-3 rounded-full transition">
                            Activate Mission Support
                        </Link>
                        <a href="tel:+2348032157301"
                            class="border border-white/25 hover:border-orange-300 hover:text-orange-200 font-semibold px-7 py-3 rounded-full transition">
                            Call 24/7 Desk
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-2 relative">
                    <img src="https://images.unsplash.com/photo-1696243144413-503bc482a608?auto=format&fit=crop&q=80&w=1800"
                        alt="Air ambulance response aircraft"
                        class="w-full h-[460px] object-cover rounded-3xl border border-white/15 shadow-2xl" />
                    <div
                        class="absolute -bottom-6 -left-6 bg-black/70 backdrop-blur-md border border-orange-300/40 rounded-2xl p-5 w-52">
                        <p class="text-orange-300 text-xs uppercase tracking-wider">Readiness</p>
                        <p class="text-3xl font-extrabold mt-2">24/7</p>
                        <p class="text-xs text-gray-300 mt-1">Emergency activation and mission control availability</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-black text-white px-6 md:px-16 py-20">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <p class="text-orange-300 uppercase tracking-[0.2em] text-xs font-semibold">Why Northstar Air
                        Ambulance</p>
                    <h2 class="text-3xl md:text-5xl font-bold leading-tight">A Dependable Partner For Time-Critical
                        Medical Flights</h2>
                    <p class="text-gray-300 text-lg leading-relaxed">
                        Northstar Aviation delivers more than aircraft availability. We provide structured medical air
                        support with the operational maturity needed for sensitive patient movement. Our team works to
                        ensure that patients, relatives, and partner institutions experience a transfer process that is
                        organized, calm, and professionally managed.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        From the moment a request is received, we assess mission urgency, clinical requirements,
                        distance, airport access, and receiving-facility readiness. That joined-up approach allows us
                        to build air ambulance missions that are practical, medically appropriate, and aligned with the
                        highest duty of care.
                    </p>
                </div>

                <div class="grid gap-5">
                    <article v-for="item in northstarStrengths" :key="item.title"
                        class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:border-orange-300/50 transition">
                        <h3 class="text-xl font-semibold text-white mb-3">{{ item.title }}</h3>
                        <p class="text-sm text-gray-300 leading-relaxed">{{ item.text }}</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="bg-slate-950 text-white px-6 md:px-16 py-20">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-10 items-center">
                <div class="lg:col-span-2">
                    <img src="/jet_air_ambulance.jpeg" alt="Medical support team preparing an air ambulance mission"
                        class="w-full h-[520px] object-cover rounded-3xl border border-white/10" />
                </div>

                <div class="lg:col-span-3">
                    <p class="text-orange-300 uppercase tracking-[0.2em] text-xs font-semibold mb-4">Service Coverage
                    </p>
                    <h2 class="text-3xl md:text-5xl font-bold leading-tight mb-6">What Our Air Ambulance Service Is
                        Built To Handle</h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-8 max-w-3xl">
                        Every case is different, and Northstar Aviation approaches each mission with that reality in
                        mind. Our air ambulance service is structured to support urgent evacuation, scheduled medical
                        transfer, and complex regional or international movement where clinical stability and dependable
                        coordination are essential.
                    </p>

                    <div class="grid md:grid-cols-2 gap-5">
                        <article v-for="item in serviceCoverage" :key="item.title"
                            class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:border-orange-300/50 transition">
                            <h3 class="text-lg font-semibold text-white mb-2">{{ item.title }}</h3>
                            <p class="text-sm text-gray-300 leading-relaxed">{{ item.text }}</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-black text-white px-6 md:px-16 pb-24">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-10 items-stretch">
                <div
                    class="rounded-3xl border border-white/10 bg-gradient-to-br from-slate-900 to-slate-800 p-8 md:p-10">
                    <p class="text-orange-300 uppercase tracking-[0.2em] text-xs font-semibold mb-4">Why Clients Trust
                        Us</p>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Professional Handling When The Stakes Are High</h2>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Air ambulance work demands calm coordination, dependable communication, and disciplined
                        execution. Northstar Aviation is committed to delivering that standard with every case,
                        whether the request comes from a hospital, a family, an insurer, or an institutional client.
                    </p>
                    <ul class="space-y-4">
                        <li v-for="item in trustPoints" :key="item"
                            class="flex gap-3 items-start text-sm text-gray-200">
                            <span class="mt-1 h-2.5 w-2.5 rounded-full bg-orange-300"></span>
                            <span>{{ item }}</span>
                        </li>
                    </ul>
                </div>

                <div class="rounded-3xl border border-white/10 bg-white/5 p-8 md:p-10 flex flex-col justify-between">
                    <div>
                        <p class="text-orange-300 uppercase tracking-[0.2em] text-xs font-semibold mb-4">Immediate
                            Assistance</p>
                        <h3 class="text-3xl font-bold mb-4">Need To Arrange A Medical Flight?</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Speak with Northstar Aviation to discuss patient condition, route needs, timing, and the
                            most appropriate next steps. Our team is available to help you move quickly and responsibly.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4 mt-8">
                        <Link :href="PagesController.contact()"
                            class="inline-block bg-orange-400 hover:bg-orange-500 px-6 py-3 rounded-full font-semibold text-white transition">
                            Start Emergency Request
                        </Link>
                        <a href="tel:+2348032157301"
                            class="inline-block border border-white/20 hover:border-orange-300 hover:text-orange-200 px-6 py-3 rounded-full font-semibold transition">
                            Call 24/7 Desk
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </PagesLayout>
</template>
