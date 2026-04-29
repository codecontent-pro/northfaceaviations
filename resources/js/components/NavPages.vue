<script setup>
import { ref } from "vue";
import { Link } from '@inertiajs/vue3';
import PagesController from "@/actions/App/Http/Controllers/PagesController";

const isOpen = ref(false);
const servicesOpen = ref(false);
const mobileServicesOpen = ref(false);

const services = [
    { label: 'Air Ambulance', href: '/services/air-ambulance' },
    { label: 'Private Jet / Helicopter Charter', href: '/services/private-jet-helicopter-charter' },
    { label: 'Air Cargo', href: '/services/air-cargo' },
    { label: 'Aircraft Management', href: '/services/aircraft-management' },
    { label: 'Aircraft Sale / Lease', href: '/services/aircraft-sale-lease' },
    { label: 'Flight Booking / Hotel Reservation / Airport Transfer / Visa Assistance', href: '/services/travel-support' },
    { label: 'Aviation Consultancy', href: '/services/aviation-consultancy' },
];

function toggleMenu() {
    isOpen.value = !isOpen.value;
}

function bookCall() {
    window.open("https://calendly.com/yourclient/air-ambulance-call", "_blank");
}
</script>

<template>
    <nav class="fixed top-0 left-0 w-full z-50 bg-slate-950/50 backdrop-blur-lg border-b border-white/10">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
            <!-- Logo -->
            <Link :href="PagesController.home()" class="text-2xl font-extrabold tracking-tight text-white">
                NorthStar<span class="text-orange-300">Aviations</span>
            </Link>

            <!-- Desktop Links -->
            <div class="hidden md:flex items-center space-x-10">
                <Link :href="PagesController.about()" class="text-gray-300 hover:text-white transition">About</Link>

                <!-- Services Dropdown -->
                <div class="relative" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                    <Link :href="PagesController.service()"
                        class="flex items-center gap-1 text-gray-300 hover:text-white transition">
                        Services
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200"
                            :class="servicesOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </Link>

                    <transition name="dropdown">
                        <div v-if="servicesOpen"
                            class="absolute top-full left-1/2 -translate-x-1/2 mt-3 w-72 bg-slate-900 border border-white/10 rounded-2xl shadow-2xl py-2 z-50">
                            <Link v-for="service in services" :key="service.label" :href="service.href"
                                class="block px-5 py-2.5 text-sm text-gray-300 hover:text-white hover:bg-white/5 transition">
                                {{ service.label }}
                            </Link>
                        </div>
                    </transition>
                </div>

                <Link :href="PagesController.contact()" class="text-gray-300 hover:text-white transition">Contact</Link>
                <button
                    class="bg-orange-400 hover:bg-orange-600 transition px-5 py-2 rounded-full font-semibold text-white text-sm"
                    @click="bookCall">
                    Book a Call
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-white text-2xl focus:outline-none" @click="toggleMenu">
                <svg v-if="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <transition name="fade">
            <div v-if="isOpen"
                class="md:hidden bg-slate-950/90 backdrop-blur-md border-t border-white/10 flex flex-col items-center space-y-4 py-6">
                <Link :href="PagesController.about()" class="text-gray-300 hover:text-white transition">About</Link>

                <!-- Mobile Services Toggle -->
                <div class="w-full text-center">
                    <div class="flex items-center justify-center gap-1">
                        <Link :href="PagesController.service()" class="text-gray-300 hover:text-white transition">
                            Services</Link>
                        <button type="button" @click="mobileServicesOpen = !mobileServicesOpen"
                            class="text-gray-300 hover:text-white transition" aria-label="Toggle services menu">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-200"
                                :class="mobileServicesOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                    <transition name="dropdown">
                        <ul v-if="mobileServicesOpen" class="mt-2 space-y-1">
                            <li v-for="service in services" :key="service.label">
                                <Link :href="service.href"
                                    class="block text-sm text-gray-400 hover:text-orange-300 transition py-1">
                                    {{ service.label }}
                                </Link>
                            </li>
                        </ul>
                    </transition>
                </div>

                <Link :href="PagesController.contact()" class="text-gray-300 hover:text-white transition">Contact</Link>
                <button
                    class="bg-orange-400 hover:bg-orange-600 transition px-6 py-2 rounded-full font-semibold text-white text-sm"
                    @click="bookCall">
                    Book a Call
                </button>
            </div>
        </transition>
    </nav>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

.dropdown-enter-active,
.dropdown-leave-active {
    transition: opacity 0.2s ease, transform 0.2s ease;
}

.dropdown-enter-from,
.dropdown-leave-to {
    opacity: 0;
    transform: translateY(-6px);
}
</style>
