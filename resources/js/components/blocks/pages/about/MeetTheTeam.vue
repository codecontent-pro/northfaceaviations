<!-- <template>
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Expert Team</h2>
            <p class="text-gray-600 mb-16 max-w-2xl mx-auto">
                Behind every successful mission is a dedicated team of aviation and medical professionals
                working together to ensure safety, precision, and care.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                <div v-for="member in team" :key="member.name"
                    class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-xl transition">
                    <img :src="member.image" :alt="member.name" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">{{ member.name }}</h3>
                        <p class="text-gray-500 text-sm mb-3">{{ member.role }}</p>
                        <p class="text-gray-600 text-sm">{{ member.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const team = [
    {
        name: 'Captain Daniel Smith',
        role: 'Chief Pilot',
        image: 'https://images.unsplash.com/photo-1581093588401-22d04cc7f2d7?auto=format&fit=crop&w=800&q=80',
        description:
            '15+ years of international flight experience, leading safe and efficient medical evacuations worldwide.',
    },
    {
        name: 'Dr. Aisha Karim',
        role: 'Medical Director',
        image: 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80',
        description:
            'Specialist in emergency medicine, overseeing all in-flight patient care and response coordination.',
    },
    {
        name: 'Michael Chen',
        role: 'Operations Manager',
        image: 'https://images.unsplash.com/photo-1590650046871-92c887180603?auto=format&fit=crop&w=800&q=80',
        description:
            'Coordinates global logistics and ensures our aircraft and ground teams are always mission-ready.',
    },
    {
        name: 'Nurse Jane Roberts',
        role: 'Flight Nurse',
        image: 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=800&q=80',
        description:
            'Provides compassionate in-flight medical care, ensuring patient comfort and stability throughout every journey.',
    },
];
</script>

<style scoped>
/* Optional subtle hover animation */
div[class*='shadow-lg']:hover {
    transform: translateY(-3px);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
</style> -->



<template>
    <section class="bg-black py-24 text-gray-200">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <!-- Heading -->
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
                Meet Our Expert Team
            </h2>
            <p class="text-gray-400 mb-16 max-w-2xl mx-auto">
                Behind every successful mission is a dedicated team of aviation and medical professionals
                ensuring every flight is safe, precise, and filled with care.
            </p>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                <div v-for="member in team" :key="member.name"
                    class="bg-gradient-to-b from-gray-900 to-gray-800 border border-gray-700 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-red-900/30 transition-all duration-300">
                    <img :src="member.image" :alt="member.name"
                        class="w-full h-64 object-cover grayscale hover:grayscale-0 transition duration-300" />
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-white">{{ member.name }}</h3>
                        <p class="text-red-500 text-sm mb-3 font-medium">{{ member.role }}</p>
                        <p class="text-gray-400 text-sm leading-relaxed">{{ member.description }}</p>
                    </div>
                </div>
            </div>

            <!-- Decorative Divider -->
            <div class="mt-20 w-32 h-[3px] mx-auto bg-gradient-to-r from-red-600 to-transparent rounded-full"></div>
        </div>
    </section>
</template>

<script setup>
const team = [
    {
        name: 'Captain Daniel Smith',
        role: 'Chief Pilot',
        image:
            'https://images.unsplash.com/photo-1581093588401-22d04cc7f2d7?auto=format&fit=crop&w=800&q=80',
        description:
            '15+ years of international flight experience, leading safe and efficient medical evacuations worldwide.',
    },
    {
        name: 'Dr. Aisha Karim',
        role: 'Medical Director',
        image:
            'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80',
        description:
            'Specialist in emergency medicine, overseeing all in-flight patient care and coordination with ground facilities.',
    },
    {
        name: 'Michael Chen',
        role: 'Operations Manager',
        image:
            'https://images.unsplash.com/photo-1590650046871-92c887180603?auto=format&fit=crop&w=800&q=80',
        description:
            'Ensures seamless logistics and flight readiness across multiple regions, coordinating teams with precision.',
    },
    {
        name: 'Nurse Jane Roberts',
        role: 'Flight Nurse',
        image:
            'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=800&q=80',
        description:
            'Delivers expert in-flight care, ensuring patients receive the highest level of medical attention mid-air.',
    },
];
</script>

<style scoped>
div[class*='shadow-2xl']:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease;
}
</style>
