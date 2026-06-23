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
                        class="w-full h-96 object-cover grayscale hover:grayscale-0 transition duration-300" />
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
        name: 'Walid Ibrahim suleiman',
        role: 'Chief Operating Officer',
        image:
            'pilot_one.jpeg',
        description:
            'A South African trained Pilot with rating on the Embrear 145. From the cockpit to the boardroom, precision drives everything. He brings the same focus, discipline, and calm decision- making of aviation to Northstar aviation. As COO, I ensures operations run smoothly, teams perform at their best, and strategic goals are always on course—keeping the company soaring toward success.',
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
        name: 'Vincent Onuh',
        role: 'Administration & Legal Affairs',
        image:
            'Vincent.JPEG',
        description:
            'Vincent Onuh is a qualified Barrister and Solicitor specializing in public and private law and conflict resolution. He utilizes alternative dispute resolution (ADR) techniques to ensure timely justice delivery and foster community stability. His commitment to peacebuilding and social justice drives innovative, inclusive approaches to promoting liberty and equity across diverse contexts',
    },
    {
        name: 'Emmanuel Onwubuariri',
        role: 'Operations Lead (Canada)',
        image:
            'emraph.jpeg',
        description:
            'Emmanuel Onwubuariri is a seasoned aviation professional with over 10 years of experience in flight operations and safety management. His expertise in aviation operations, coupled with a strong commitment to safety and efficiency, ensures that every flight meets the highest standards of excellence.',
    },
    {
        name: 'Dr. Osondu Nnajiofor',
        role: 'Clinical Director & Air Ambulance Lead',
        image:
            'peter_michael.jpeg',
        description:
            'A distinguished physician and healthcare administrator with a proven track record across West Africa. From high-stakes emergency medicine to global medical tourism, precision and seamless coordination drive his approach. As Clinical Director and Air Ambulance Lead, he blends advanced clinical expertise with rigorous operational standards to ensure every aeromedical evacuation is executed safely, ethically, and at world-class levels — keeping Northstar Aviation at the absolute forefront of lifesaving patient care.',
    },
    {
        name: 'Mr Peter Michael ',
        role: 'Operations Head (Nigeria)',
        image:
            'osondu_Nnajiofor.jpeg',
        description:
            'Peter is a versatile and results-driven professional with experience in aviation operations, customer service, administrative coordination, and business development. With a strong background in airline operations and over two years of experience in flight dispatch, he has built a reputation for professionalism, attention to detail, effective communication, and a commitment to excellence. Passionate about continuous growth and delivering high standards in every role, Peter brings a solution- oriented mindset and a dedication to teamwork, efficiency, and exceptional service.',
    },


];
</script>

<style scoped>
div[class*='shadow-2xl']:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease;
}
</style>
