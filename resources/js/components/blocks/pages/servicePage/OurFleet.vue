<!-- <template>
    <section class="bg-gray-950 text-white py-20 px-6 md:px-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Our Fleet</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">
                Explore our modern fleet of vehicles — designed for comfort, reliability, and performance across all
                routes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div v-for="(fleet, index) in fleets" :key="index"
                class="bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-gray-700/30 transition-all duration-300">
                <img :src="fleet.image" :alt="fleet.name" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ fleet.name }}</h3>
                    <p class="text-gray-400 text-sm mb-4">{{ fleet.description }}</p>
                    <ul class="text-gray-300 text-sm space-y-1">
                        <li v-for="(feature, i) in fleet.features" :key="i" class="flex items-center">
                            <span class="text-orange-500 mr-2">•</span>{{ feature }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const fleets = [
    {
        name: 'Executive Sedan',
        image: '/images/fleet-sedan.jpg',
        description: 'Perfect for airport transfers and executive travel.',
        features: ['Leather interior', 'Free Wi-Fi', 'Air conditioning'],
    },
    {
        name: 'Luxury SUV',
        image: '/images/fleet-suv.jpg',
        description: 'Spacious and stylish SUVs for family and business trips.',
        features: ['All-wheel drive', 'Ample luggage space', 'Comfort seating'],
    },
    {
        name: 'Mini Bus',
        image: '/images/fleet-minibus.jpg',
        description: 'Ideal for group travel, events, and tours.',
        features: ['Up to 14 passengers', 'AC system', 'Professional driver'],
    },
];
</script>

<style scoped></style> -->




<template>
    <section class="bg-gray-950 text-white py-20 px-6 md:px-12">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Our Fleet</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">
                From light jets to long-range aircraft, our diverse fleet is designed to meet your every travel need —
                delivering comfort, safety, and performance with every journey.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div v-for="(craft, index) in fleet" :key="index"
                class="bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-gray-700/40 transition-all duration-300">
                <img :src="craft.image" :alt="craft.name" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ craft.name }}</h3>
                    <p class="text-gray-400 text-sm mb-3">{{ craft.type }}</p>
                    <div class="flex items-center justify-between text-gray-300 text-sm">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2m-4 0H7a2 2 0 01-2-2V10a2 2 0 012-2h6m0-4v4m0 0l-4 4m4-4l4 4" />
                            </svg>
                            {{ craft.capacity }}
                        </span>
                        <span class="italic text-gray-500">Luxury Class</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const fleet = [
    {
        name: "Citation",
        type: "Light Jet",
        capacity: "6 seaters",
        image: "https://images.unsplash.com/photo-1746442525676-14a3d8d2ffb3?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2833",
    },
    {
        name: "Hawker 800XP",
        type: "Mid-size Jet",
        capacity: "8 seaters",
        image: "https://images.unsplash.com/photo-1742158379674-43eb7e6d9de5?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2071",
    },
    {
        name: "Phenom 300",
        type: "Light Jet",
        capacity: "8 seaters",
        // image: "/images/fleet/phenom.jpg",
        image: "phenon3000.webp",
    },
    {
        name: "Challenger Series (602 / 604 / 605)",
        type: "Heavy Jet",
        capacity: "12 - 13 seaters",
        image: "challenger.webp",
    },
    {
        name: "Gulfstream G400",
        type: "Long Range Jet",
        capacity: "14 seaters",
        image: "gulfstream.webp",
    },
    {
        name: "Gulfstream G550",
        type: "Ultra Long Range Jet",
        capacity: "14 seaters",
        image: "https://images.unsplash.com/photo-1736654887860-5582de9510d6?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2831",
    },
    {
        name: "Embraer Legacy",
        type: "Heavy Jet",
        capacity: "14 seaters",
        image: "https://images.unsplash.com/photo-1706920102507-3f6a8ce88acb?q=80&w=1598&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    },
    {
        name: "Embraer 145",
        type: "Regional Jet",
        capacity: "50 seaters",
        image: "https://images.unsplash.com/photo-1724010371437-7b7cb197df94?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2070",
    },
    {
        name: "Embraer 135",
        type: "Regional Jet",
        capacity: "22 seaters",
        image: "https://images.unsplash.com/photo-1614872375964-9ee013fffbda?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2070",
    },
    {
        name: "Bell 412 Helicopter",
        type: "Helicopter",
        capacity: "10 seaters",
        image: "https://images.unsplash.com/photo-1742931897852-233e8d38b5fc?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2070",
    },
    {
        name: "Sikorsky S92 Helicopter",
        type: "Helicopter",
        capacity: "5 seaters",
        image: "https://images.unsplash.com/photo-1630866217872-764be80838fa?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2070",
    },
    {
        name: "Beechcraft 1900",
        type: "Turboprop",
        capacity: "17 seaters",
        image: "https://images.unsplash.com/photo-1726002496691-e9a86b5fdb97?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    },
];
</script>
