<template>
    <section class="bg-gray-900 text-white py-24 px-8 md:px-20">
        <div class="grid md:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
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
                    <FeatureItem title="Certified Medical Crew"
                        desc="Experienced flight medics, nurses, and pilots ready 24/7." icon="alert-circle" />
                    <FeatureItem title="Global Reach" desc="We operate across continents — wherever help is needed."
                        icon="globe" />
                    <FeatureItem title="Rapid Dispatch"
                        desc="Average response time under 45 minutes for critical calls." icon="clock" />
                    <FeatureItem title="State-of-the-Art Fleet"
                        desc="Equipped with ICU-level care systems and advanced flight tech." icon="activity" />
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
