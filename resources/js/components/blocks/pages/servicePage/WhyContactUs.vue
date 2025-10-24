<template>
    <section class="relative bg-[#0a0a0a] text-white py-24 px-6 md:px-16 lg:px-24 overflow-hidden">
        <!-- Background accents -->
        <div class="absolute -top-20 -left-20 w-96 h-96 bg-red-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-[28rem] h-[28rem] bg-blue-600/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center relative z-10">
            <!-- Text Section -->
            <div>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
                    Why Choose <span class="text-red-600">Northface Aviation</span>?
                </h2>
                <p class="text-gray-400 mb-8 leading-relaxed">
                    We combine medical excellence with aviation expertise to ensure safe, swift, and reliable air
                    ambulance
                    operations — anywhere in the world. Our aircraft are fully equipped with intensive care units and
                    staffed
                    by highly trained paramedics and flight nurses.
                </p>

                <ul class="space-y-4 text-gray-300">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-red-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-7.364 7.364a1 1 0 01-1.414 0L3.293 9.414a1 1 0 011.414-1.414L9 12.293l6.293-6.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>24/7 Global Operations</strong> — always on standby for emergencies.</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-red-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-7.364 7.364a1 1 0 01-1.414 0L3.293 9.414a1 1 0 011.414-1.414L9 12.293l6.293-6.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>Critical Care Equipment</strong> — onboard ICU setups ready for any
                            condition.</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-red-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-7.364 7.364a1 1 0 01-1.414 0L3.293 9.414a1 1 0 011.414-1.414L9 12.293l6.293-6.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>International Medical Network</strong> — partnerships with hospitals
                            worldwide.</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-red-600 mr-3 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-7.364 7.364a1 1 0 01-1.414 0L3.293 9.414a1 1 0 011.414-1.414L9 12.293l6.293-6.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>Experienced Flight Crews</strong> — aviation professionals specialized in medical
                            missions.</span>
                    </li>
                </ul>

                <button
                    class="mt-10 bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-4 rounded-full transition duration-300">
                    Learn More About Us
                </button>
            </div>

            <!-- Image Section -->
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1558406617-6411d3250c55?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2831"
                    alt="Air Ambulance Team" class="rounded-3xl shadow-2xl border border-white/10" />
                <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-red-600/10 rounded-full blur-3xl"></div>
            </div>
        </div>
    </section>
</template>
