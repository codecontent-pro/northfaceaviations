<template>
    <div>
        <section class="min-h-screen bg-slate-950 text-white flex items-center px-8 pt-28 md:pt-0 md:px-20">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center w-full">
                <!-- Left: Text -->
                <div class="space-y-6">
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                        Your Time is <span class="text-orange-300">Precious,</span><br />
                        We Maximize Your <span class="text-orange-300">Travel Experience</span>.
                    </h1>

                    <p class="text-gray-400 text-base max-w-md">
                        Northstar Aviation Solutions LTD is dedicated to providing exceptional travel experience with a
                        focus on safety, punctuality, and personalized service.
                    </p>

                    <p class="text-gray-400 text-base max-w-md">
                        With a team of skilled professionals, and state-of-the
                        art fleet ensure a seamless journey from departures to arrivals. Join our satisfied
                        travelers
                        and elevate your aviation experience by choosing NorthStar Aviation for your next flight.
                        Book
                        with confidence and fly with the best.
                    </p>

                    <button
                        class="bg-orange-400 hover:bg-orange-600 transition px-6 py-3 rounded-full font-semibold text-white text-lg shadow-lg"
                        @click="bookCall">
                        Book a Call
                    </button>
                </div>

                <!-- Right: Image + Card -->
                <div class="relative w-full flex justify-center">
                    <a :href="currentSlide.href"
                        class="group block w-full rounded-2xl cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-300 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
                        :aria-label="`Open ${currentSlide.alt}`">
                        <transition name="fade" mode="out-in">
                            <img :key="currentSlide.image" :src="currentSlide.image" :alt="currentSlide.alt"
                                class="w-full h-[500px] object-cover rounded-2xl brightness-75 group-hover:brightness-90 transition duration-300" />
                        </transition>

                        <div
                            class="absolute top-5 left-5 bg-black/55 border border-white/30 text-white text-xs md:text-sm font-semibold px-3 py-2 rounded-full tracking-wide backdrop-blur-sm group-hover:bg-orange-500/85 group-hover:border-orange-200/60 transition">
                            Click image to explore
                        </div>
                    </a>

                    <button type="button"
                        class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/45 hover:bg-black/70 border border-white/25 w-10 h-10 rounded-full text-white grid place-items-center transition"
                        @click="prevSlide" aria-label="Previous slide">
                        <span aria-hidden="true">&#10094;</span>
                    </button>

                    <button type="button"
                        class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/45 hover:bg-black/70 border border-white/25 w-10 h-10 rounded-full text-white grid place-items-center transition"
                        @click="nextSlide" aria-label="Next slide">
                        <span aria-hidden="true">&#10095;</span>
                    </button>

                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex items-center gap-2">
                        <button v-for="(slide, index) in slides" :key="slide.image" type="button"
                            class="w-2.5 h-2.5 rounded-full transition"
                            :class="index === currentIndex ? 'bg-orange-300' : 'bg-white/40 hover:bg-white/65'"
                            :aria-label="`Go to slide ${index + 1}`" @click="setSlide(index)" />
                    </div>

                    <div
                        class="absolute bottom-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 shadow-lg max-w-xs transition group-hover:border-orange-300/50">
                        <h3 class="text-xl font-bold mb-2 text-white">{{ currentSlide.cardTitle }}</h3>
                        <p class="text-gray-300 text-sm">
                            {{ currentSlide.cardText }}
                        </p>
                        <span class="inline-flex items-center gap-1 text-orange-300 text-sm font-semibold mt-3">
                            {{ currentSlide.linkLabel }}
                            <span aria-hidden="true">&#8594;</span>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { computed, onBeforeUnmount, onMounted, ref } from 'vue';

const slides = [
    {
        image:
            'https://images.unsplash.com/photo-1540962351504-03099e0a754b?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1974',
        alt: 'Private jet prepared for premium charter service',
        href: '/services/private-jet-helicopter-charter',
        cardTitle: 'Premium Charter Experience',
        cardText: 'Personalized charter planning built around your schedule and destination needs.',
        linkLabel: 'Explore Charter Options',
    },
    {
        image:
            'https://images.unsplash.com/photo-1696243144413-503bc482a608?auto=format&fit=crop&q=80&w=1800',
        alt: 'Air ambulance team in active response mode',
        href: '/services/air-ambulance',
        cardTitle: 'Expert Aviation Team',
        cardText: 'Experienced pilots and support specialists deliver safe and seamless operations.',
        linkLabel: 'Learn About Us',
    },
    {
        image:
            '/ticketing_1.jpeg',
        alt: 'Flight tickets and travel documents on a table',
        href: '/services/travel-support',
        cardTitle: 'Hassle-Free Ticketing',
        cardText: 'We handle your flight bookings, travel documents, and itinerary so you can simply show up and fly.',
        linkLabel: 'Explore Travel Support',
    },
    {
        image:
            '/cargo_4.jpeg',
        alt: 'Cargo aircraft loaded and ready for freight dispatch',
        href: '/services/air-cargo',
        cardTitle: 'Reliable Air Cargo',
        cardText: 'Swift and secure freight handling from pickup to delivery, across domestic and international routes.',
        linkLabel: 'Explore Cargo Services',
    },
    {
        image:
            '/craft_management_2.jpeg',
        alt: 'Aircraft maintenance and fleet management operations',
        href: '/services/aircraft-management',
        cardTitle: 'Comprehensive Aircraft Management',
        cardText: 'Full-service fleet maintenance, scheduling, and operations management.',
        linkLabel: 'Explore Aircraft Management',
    },
    {
        image:
            '/operational_control_1.jpeg',
        alt: 'Operations team managing flight dispatch and control procedures',
        href: '/services/aviation-consultancy',
        cardTitle: 'Operational Control & Oversight',
        cardText: 'End-to-end flight operations control — from dispatch coordination to real-time monitoring and compliance.',
        linkLabel: 'Explore Operational Services',
    },
    {
        image:
            '/jet_lease.jpeg',
        alt: 'Aviation consultant advising on strategy and regulatory compliance',
        href: '/services/aviation-consultancy',
        cardTitle: 'Aviation Consultancy',
        cardText: 'Strategic aviation advice covering regulatory compliance, safety audits, and operational efficiency.',
        linkLabel: 'Explore Consultancy Services',
    },
];

const currentIndex = ref(0);
let rotationTimer;

const currentSlide = computed(() => slides[currentIndex.value]);

const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % slides.length;
};

const prevSlide = () => {
    currentIndex.value = (currentIndex.value - 1 + slides.length) % slides.length;
};

const setSlide = (index) => {
    currentIndex.value = index;
};

const startAutoRotation = () => {
    rotationTimer = window.setInterval(nextSlide, 5000);
};

const stopAutoRotation = () => {
    if (rotationTimer) {
        clearInterval(rotationTimer);
        rotationTimer = undefined;
    }
};

const bookCall = () => {
    window.location.href = '/contact';
};

onMounted(() => {
    startAutoRotation();
});

onBeforeUnmount(() => {
    stopAutoRotation();
});
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.35s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>