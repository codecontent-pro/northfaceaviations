<template>
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
                            <span class="text-blue-500 mr-2">•</span>{{ feature }}
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

<style scoped></style>
