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
            <div class="grid grid-cols-1 sm:grid-cols-2 mx-auto lg:grid-cols-3 gap-10">
                <div v-for="member in team" :key="member.name"
                    class="bg-gradient-to-b from-gray-900 to-gray-800 border border-gray-700 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-orange-900/30 transition-all duration-300">
                    <img :src="member.image" :alt="member.name"
                        class="w-full h-64 object-cover grayscale hover:grayscale-0 transition duration-300" />
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-white">{{ member.name }}</h3>
                        <p class="text-orange-300 text-sm mb-3 font-medium">{{ member.role }}</p>
                        <p class="text-gray-400 text-sm leading-relaxed">{{ member.description }}</p>
                    </div>
                </div>
            </div>

            <!-- Decorative Divider -->
            <div class="mt-20 w-32 h-[3px] mx-auto bg-gradient-to-r from-orange-600 to-transparent rounded-full"></div>
        </div>
    </section>
</template>

<script setup>
const team = [
    {
        name: 'Vincent Onuh',
        role: 'Administration & Legal Affairs',
        image:
            'Vincent.JPEG',
        description:
            'Vincent Onuh is a qualified Barrister and Solicitor specializing in public and private law and conflict resolution. He utilizes alternative dispute resolution (ADR) techniques to ensure timely justice delivery and foster community stability. His commitment to peacebuilding and social justice drives innovative, inclusive approaches to promoting liberty and equity across diverse contexts',
    },
    {
        name: 'Akolade Esther',
        role: 'Business Development',
        image:
            'Esther1.jpeg',
        description:
            'Akola Esther combines a BSc in Business Administration with experience as a licensed cabin crew member to offer analytical expertise and exceptional service. Her background has cultivated strong interpersonal skills, attention to detail, and resourcefulness under pressure',
    },

    {
        name: 'Emmanuel Onwubuariri',
        role: 'Operations Lead',
        image:
            'emraph.jpeg',
        description:
            'Emmanuel Onwubuariri is a seasoned aviation professional with over 10 years of experience in flight operations and safety management. His expertise in aviation operations, coupled with a strong commitment to safety and efficiency, ensures that every flight meets the highest standards of excellence.',
    },

];
</script>

<style scoped>
div[class*='shadow-2xl']:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease;
}
</style>
