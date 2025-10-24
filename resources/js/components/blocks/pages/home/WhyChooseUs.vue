<template>
    <section class="bg-gray-900 text-white py-24 px-8 md:px-20">
        <div class="grid md:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
            <!-- Left Content -->
            <!-- Left Content -->
            <div class="space-y-8">
                <h2 class="text-3xl md:text-5xl font-extrabold leading-tight">
                    Why Choose <span class="text-red-500">AirRescue?</span>
                </h2>

                <p class="text-gray-400 text-lg max-w-md">
                    When emergencies strike, you need more than speed — you need precision, care, and trust.
                    Our dedicated air ambulance team combines world-class aviation with medical expertise,
                    ensuring every second counts toward saving lives.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">
                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-white/10 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Certified Medical Crew</h3>
                            <p class="text-gray-400 text-sm">Experienced flight medics, nurses, and pilots ready 24/7.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-white/10 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m-6 6h8a2 2 0 002-2V7a2 2 0 00-2-2h-5l-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2h8z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Global Reach</h3>
                            <p class="text-gray-400 text-sm">We operate across continents — wherever help is needed.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-white/10 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h11M9 21V3m0 18a9 9 0 009-9" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">Rapid Dispatch</h3>
                            <p class="text-gray-400 text-sm">Average response time under 45 minutes for critical calls.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="p-3 bg-white/10 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2zM22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg">State-of-the-Art Fleet</h3>
                            <p class="text-gray-400 text-sm">Equipped with ICU-level care systems and advanced flight
                                tech.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Region Coverage Card -->
            <div
                class="relative bg-gray-800/60 rounded-2xl p-8 shadow-2xl border border-white/10 backdrop-blur-lg hover:scale-[1.02] transition-transform duration-300">
                <h3 class="text-2xl font-bold mb-6 text-white">Regions We Cover 🌍</h3>
                <p class="text-gray-400 text-sm mb-8">
                    We operate globally — connecting critical care between continents with our trusted partners.
                </p>

                <div class="grid grid-cols-2 gap-6">
                    <div v-for="region in regions" :key="region.name"
                        class="flex items-center space-x-3 bg-white/5 p-3 rounded-lg hover:bg-white/10 transition">
                        <img :src="region.flag" :alt="region.name"
                            class="w-8 h-8 rounded-full border border-white/20 object-cover" />
                        <span class="text-sm font-medium text-gray-200">{{ region.name }}</span>
                    </div>
                </div>

                <div
                    class="absolute inset-0 bg-gradient-to-tr from-gray-900/10 via-transparent to-transparent rounded-2xl pointer-events-none">
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from "vue";

// 🩺 Small reusable feature component
const FeatureItem = {
    props: ["title", "desc", "icon"],
    template: `
      <div class="flex items-start space-x-4">
        <div class="p-3 bg-white/10 rounded-full">
          <i :class="'lucide-' + icon" class="h-6 w-6 text-red-500"></i>
        </div>
        <div>
          <h3 class="font-semibold text-lg">{{ title }}</h3>
          <p class="text-gray-400 text-sm">{{ desc }}</p>
        </div>
      </div>
    `,
};

// 🌍 Regions Data
const regions = ref([
    { name: "Nigeria", flag: "https://flagcdn.com/w40/ng.png" },
    { name: "Ghana", flag: "https://flagcdn.com/w40/gh.png" },
    { name: "South Africa", flag: "https://flagcdn.com/w40/za.png" },
    { name: "United Arab Emirates", flag: "https://flagcdn.com/w40/ae.png" },
    { name: "United Kingdom", flag: "https://flagcdn.com/w40/gb.png" },
    { name: "United States", flag: "https://flagcdn.com/w40/us.png" },
    { name: "Kenya", flag: "https://flagcdn.com/w40/ke.png" },
    { name: "India", flag: "https://flagcdn.com/w40/in.png" },
]);
</script>

<style scoped>
.shadow-2xl {
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}
</style>
