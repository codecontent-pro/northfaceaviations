<script setup>
import { ref } from "vue";
import { Link, usePage } from '@inertiajs/vue3';
import PagesController from "@/actions/App/Http/Controllers/PagesController";

const isOpen = ref(false);

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
                <Link :href="PagesController.service()" class="text-gray-300 hover:text-white transition">Services
                </Link>
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
                <Link :href="PagesController.service()" class="text-gray-300 hover:text-white transition">Services
                </Link>
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
</style>
