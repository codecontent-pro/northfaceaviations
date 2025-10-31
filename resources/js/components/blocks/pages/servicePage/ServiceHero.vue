<template>
    <section class="relative bg-black text-white py-24 px-6 md:px-16 lg:px-24 overflow-hidden">
        <!-- Subtle gradient glow background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-orange-300/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-[32rem] h-[32rem] bg-amber-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">
                <span class="text-orange-300">Our Services</span> — Saving Lives Beyond Borders
            </h2>
            <p class="text-gray-400 mt-4 max-w-2xl mx-auto">
                <!-- From emergency evacuations to medical repatriations, we deliver world-class air ambulance and medical
                transport services — wherever you are. -->

                Our services include air ambulance, private jet and helicopter charters, flight ticketing, aircraft
                management,
                sales and lease, aviation consultancy, and cargo services.
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
                    <h3 class="text-3xl font-semibold mb-2">{{ service.title }}</h3>
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
        title: "Private Jet/Helicopter  Charter",
        description:
            "Highly customized air transport solutions for non-emergency medical cases, ensuring comfort and privacy.",
        image: "https://images.unsplash.com/photo-1540962351504-03099e0a754b?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1974",
    },
    {
        title: "Flight Ticketing",
        description:
            "Flight ticketing services for patients and accompanying medical staff, ensuring seamless travel arrangements.",
        image: "https://images.unsplash.com/photo-1559474185-bf13da814ef5?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1035",
    },
    {
        title: "Aircraft Management",
        description:
            "Aircraft management for private owners, ensuring regulatory compliance, maintenance, and operational efficiency.",
        image: "https://images.unsplash.com/photo-1692128236180-8d27c7e0a1d4?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=987",
    },
    {
        title: "Aircraft sales/Lease",
        description:
            "Aircraft sales and lease for private owners, ensuring regulatory compliance, maintenance, and operational efficiency.",
        image: "https://images.unsplash.com/photo-1578810771596-22aa7aa7465f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2070",
    },
    {
        title: "Aviation Consultancy",
        description:
            "Aviation consultancy services for healthcare providers and insurance companies to optimize medical transport logistics.",
        image: "https://images.unsplash.com/photo-1736959364958-40cfacc18edc?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2070",
    },
    {
        title: "Cargo",
        description:
            "Cargo services for patients stable enough to fly commercially — we provide trained medical staff to ensure safe transit from gate to gate",
        image: "https://images.unsplash.com/photo-1605732562742-3023a888e56e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1035",
    },
];
</script>

<style scoped>
/* Soft zoom hover effect */
.group:hover img {
    transform: scale(1.05);
}
</style>
