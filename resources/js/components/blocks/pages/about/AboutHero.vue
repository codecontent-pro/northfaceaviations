<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <section
            class="relative bg-black text-white py-40 px-6 flex flex-col items-center justify-center overflow-hidden"
            style="background-image: url('https://images.unsplash.com/photo-1696243144413-503bc482a608?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2071'); background-size: cover; background-position: center;">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/80 backdrop-blur-sm"></div>

            <!-- Hero Content -->
            <div class="relative z-10 max-w-5xl text-center mx-auto">
                <h1 class="text-4xl md:text-7xl font-extrabold mb-6 tracking-tight leading-tight">
                    About <span class="text-orange-300">{{ $page.props.appName }}</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 leading-relaxed max-w-3xl mx-auto mb-10">
                    NorthStar Aviation Solutions Ltd is a leading aviation solution company dedicated to providing
                    quality services, empowering the industry with innovative solutions, exceptional service and
                    unparalleled expertise. We provide cutting edge technology data-driven insights and collaborative
                    partnerships to enhance safety, efficiency and customer experience.
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#mission"
                        class="bg-orange-400 hover:bg-orange-600 text-white px-8 py-3 rounded-full text-lg font-semibold shadow-lg shadow-orange-300/40 transition duration-300">
                        Our Mission
                    </a>
                    <Link href="/contact"
                        class="border border-gray-500 hover:border-orange-300 hover:text-orange-300 px-8 py-3 rounded-full text-lg font-semibold transition duration-300">
                    Contact Us
                    </Link>
                </div>
            </div>

            <!-- Floating Cards -->
            <div class="relative z-10 mt-24 grid md:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">
                <!-- Card 1 -->
                <div
                    class="bg-gray-900/70 backdrop-blur-sm p-8 rounded-2xl shadow-2xl border border-gray-800 hover:-translate-y-2 transition duration-300">
                    <div class="text-4xl mb-4 text-orange-300"><i class="fa-solid fa-plane-departure"></i></div>
                    <h3 class="text-2xl font-semibold mb-3">Global Reach</h3>
                    <p class="text-gray-400">We operate across continents, ensuring medical support wherever it’s
                        needed.</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-gray-900/70 backdrop-blur-sm p-8 rounded-2xl shadow-2xl border border-gray-800 hover:-translate-y-2 transition duration-300">
                    <div class="text-4xl mb-4 text-orange-300"><i class="fa-solid fa-headset"></i></div>
                    <h3 class="text-2xl font-semibold mb-3">24/7 Support</h3>
                    <p class="text-gray-400">Our dispatch and emergency teams are on standby every hour of the day.</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-gray-900/70 backdrop-blur-sm p-8 rounded-2xl shadow-2xl border border-gray-800 hover:-translate-y-2 transition duration-300">
                    <div class="text-4xl mb-4 text-orange-300"><i class="fa-solid fa-user-md"></i></div>
                    <h3 class="text-2xl font-semibold mb-3">Expert Medical Team</h3>
                    <p class="text-gray-400">Trained professionals ensure patient safety and care during every
                        operation.</p>
                </div>
            </div>

            <!-- Gradient bottom -->
            <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black to-transparent"></div>
        </section>

    </div>
</template>