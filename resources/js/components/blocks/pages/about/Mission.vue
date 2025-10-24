<script setup>
</script>

<template>
    <div>
        <section class="bg-[#0a0a0a] text-gray-300 py-28 px-6 md:px-16 lg:px-24">
            <div class="grid md:grid-cols-2 gap-16 items-center">

                <!-- Left: Text & Content -->
                <div class="space-y-8">
                    <h2 class="text-5xl font-extrabold text-white leading-tight">
                        Our <span class="text-red-600">Mission</span> & <span class="text-red-600">Values</span>
                    </h2>
                    <p class="text-lg text-gray-400 leading-relaxed">
                        At Northface Aviation, our mission is to redefine emergency air transport through reliability,
                        precision, and compassion. We connect the most remote locations to world-class medical
                        facilities — fast.
                    </p>

                    <!-- Feature Cards -->
                    <div class="grid sm:grid-cols-2 gap-6 mt-10">
                        <!-- Card 1 -->
                        <div
                            class="bg-gray-900/70 p-6 rounded-2xl border border-gray-800 hover:-translate-y-2 hover:shadow-lg hover:shadow-red-900/30 transition duration-300">
                            <div class="text-3xl text-red-600 mb-3"><i class="fa-solid fa-heart-pulse"></i></div>
                            <h4 class="text-xl font-semibold mb-2">Patient First</h4>
                            <p class="text-gray-400 text-sm">Every flight is a mission to save lives. Compassion drives
                                our response.</p>
                        </div>

                        <!-- Card 2 -->
                        <div
                            class="bg-gray-900/70 p-6 rounded-2xl border border-gray-800 hover:-translate-y-2 hover:shadow-lg hover:shadow-red-900/30 transition duration-300">
                            <div class="text-3xl text-red-600 mb-3"><i class="fa-solid fa-jet-fighter"></i></div>
                            <h4 class="text-xl font-semibold mb-2">Rapid Deployment</h4>
                            <p class="text-gray-400 text-sm">We respond to emergencies within minutes — time is
                                everything.</p>
                        </div>
                    </div>

                    <div class="mt-10">
                        <a href="#fleet"
                            class="inline-block bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-full text-lg font-semibold transition duration-300">
                            Explore Our Fleet
                        </a>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1696243144413-503bc482a608?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2071"
                        alt="Air ambulance in flight"
                        class="rounded-3xl shadow-2xl border border-gray-800 hover:scale-[1.02] transition-transform duration-500" />
                    <!-- Subtle glow effect -->
                    <div class="absolute -inset-1 bg-gradient-to-t from-red-600/10 to-transparent rounded-3xl blur-lg">
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>