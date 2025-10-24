<template>
    <section class="relative bg-black text-white py-24 px-6 md:px-16 lg:px-24 overflow-hidden">
        <!-- Subtle gradient glow background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-red-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-[32rem] h-[32rem] bg-amber-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">
                <span class="text-red-600">Our Services</span> — Saving Lives Beyond Borders
            </h2>
            <p class="text-gray-400 mt-4 max-w-2xl mx-auto">
                From emergency evacuations to medical repatriations, we deliver world-class air ambulance and medical
                transport services — wherever you are.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-3 gap-8">
            <div v-for="(service, i) in services" :key="i"
                class="relative group rounded-full overflow-hidden shadow-lg border border-white/10">
                <!-- Background Image -->
                <img :src="service.image" :alt="service.title"
                    class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-700 ease-out" />

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent group-hover:from-black/90 transition">
                </div>

                <!-- Content -->
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ service.title }}</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        {{ service.description }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const services = [
    {
        title: "Air Ambulance & Emergency Evacuation",
        description:
            "Rapid-response air transport for critical patients, equipped with life-support systems and medical personnel on board.",
        image: "https://images.unsplash.com/photo-1696243144413-503bc482a608?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2071",
    },
    {
        title: "Medical Repatriation",
        description:
            "Safe return of patients to their home country under medical supervision — coordinated with hospitals and insurance providers.",
        image: "/images/services/medical-repatriation.jpg",
    },
    {
        title: "Commercial Medical Escort",
        description:
            "For patients stable enough to fly commercially — we provide trained medical staff to ensure safe transit from gate to gate.",
        image: "/images/services/medical-escort.jpg",
    },
    {
        title: "Air Ambulance & Emergency Evacuation",
        description:
            "Rapid-response air transport for critical patients, equipped with life-support systems and medical personnel on board.",
        image: "https://images.unsplash.com/photo-1696243144413-503bc482a608?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2071",
    },
    {
        title: "Medical Repatriation",
        description:
            "Safe return of patients to their home country under medical supervision — coordinated with hospitals and insurance providers.",
        image: "/images/services/medical-repatriation.jpg",
    },
    {
        title: "Commercial Medical Escort",
        description:
            "For patients stable enough to fly commercially — we provide trained medical staff to ensure safe transit from gate to gate.",
        image: "/images/services/medical-escort.jpg",
    },
];
</script>

<style scoped>
/* Soft zoom hover effect */
.group:hover img {
    transform: scale(1.05);
}
</style>
