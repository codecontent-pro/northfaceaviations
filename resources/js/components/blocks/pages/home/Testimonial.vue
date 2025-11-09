<template>
    <section class="bg-black text-gray-200 py-24 relative overflow-hidden">
        <!-- Background glow accent -->
        <div class="absolute inset-0 bg-gradient-to-b from-orange-950/20 to-transparent pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
                    What Our Clients Say
                </h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Every mission is a story of courage, precision, and care.
                    Here’s what some of our patients and partners have to say about their experience with Northstar
                    Aviation Solutions Ltd.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div v-for="(testimonial, index) in testimonials" :key="index"
                    class="bg-gradient-to-b from-gray-900 to-gray-800 border border-gray-700 rounded-2xl p-8 shadow-lg hover:shadow-2xl hover:shadow-red-900/30 transition-all duration-300">
                    <p class="text-gray-300 italic mb-6 leading-relaxed">
                        “{{ testimonial.quote }}”
                    </p>
                    <div class="flex items-center gap-4">
                        <img :src="testimonial.image" :alt="testimonial.name"
                            class="w-12 h-12 rounded-full object-cover border border-gray-600" />
                        <div class="text-left">
                            <h4 class="text-white font-semibold">{{ testimonial.name }}</h4>
                            <p class="text-gray-500 text-sm">{{ testimonial.role }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Decorative underline -->
            <div class="mt-20 w-32 h-[3px] mx-auto bg-gradient-to-r from-orange-600 to-transparent rounded-full"></div>
        </div>
    </section>
</template>

<script setup>
const testimonials = [
    {
        quote:
        'When my father fell ill in Ghana, Northstar Aviation Solutions Ltd responded immediately. The professionalism and care during the flight were world-class.',
        name: 'Sarah Williams',
        role: 'Family Member, UK',
        image:
            'https://images.unsplash.com/photo-1502685104226-ee32379fefbe?auto=format&fit=crop&w=400&q=80',
    },
    {
        quote:
            'The team handled a complex medical evacuation from Abuja with precision. Their pilots and medics are simply the best in the industry.',
        name: 'Dr. Ahmed Musa',
        role: 'Partner Hospital Director, Nigeria',
        image:
            'https://images.unsplash.com/photo-1595152772835-219674b2a8a6?auto=format&fit=crop&w=400&q=80',
    },
    {
        quote:
            'From coordination to landing, every step was smooth. It felt like being in safe hands throughout the journey.',
        name: 'John Peterson',
        role: 'Evacuation Patient, Dubai',
        image:
            'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=400&q=80',
    },
];
</script>

<style scoped>
section {
    position: relative;
}

div[class*='shadow-lg']:hover {
    transform: translateY(-4px);
}
</style>
