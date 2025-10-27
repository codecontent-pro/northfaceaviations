<script setup>

</script>

<template>
    <section
        class="relative bg-gradient-to-b from-black via-[#0a0a0a] to-[#111] text-white py-32 px-6 md:px-16 lg:px-24 text-center overflow-hidden">
        <!-- Background Accents -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute -top-40 left-1/3 w-96 h-96 bg-red-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-[28rem] h-[28rem] bg-blue-600/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-4xl mx-auto grid grid-cols-1 gap-8 relative z-10">
            <!-- Heading -->
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                Contact <span class="text-red-600">Northstar Aviation</span>
            </h1>

            <!-- Subtitle -->
            <p class="text-gray-400 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                We’re available <span class="text-white font-semibold">24/7</span> for emergency medical evacuations,
                air
                transfers, or general inquiries.
                Our team is always ready to assist — anytime, anywhere.
            </p>

            <!-- Contact Info -->
            <div class="flex flex-col md:flex-row justify-center items-center gap-6 mt-10">
                <a href="tel:+1234567890"
                    class="bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-4 rounded-full transition duration-300 shadow-lg shadow-red-800/20">
                    📞 Call Now: +1 234 567 890
                </a>
                <a href="#contact-form"
                    class="border border-gray-600 hover:border-red-600 hover:text-red-600 px-8 py-4 rounded-full font-semibold transition duration-300">
                    Send a Message
                </a>
            </div>

            <!-- Decorative line -->
            <div class="mt-16 mx-auto w-24 h-[3px] bg-gradient-to-r from-red-600 to-transparent rounded-full"></div>
        </div>
    </section>
</template>
