<template>
    <section class="bg-black text-white py-20">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Image collage -->
                <div class="relative space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="/images/air-ambulance-1.jpg" alt="Air Ambulance Service"
                            class="rounded-2xl object-cover shadow-lg">
                        <img src="/images/air-ambulance-2.jpg" alt="Emergency Air Rescue"
                            class="rounded-2xl object-cover shadow-lg mt-8">
                    </div>
                    <img src="/images/air-ambulance-3.jpg" alt="Flight Medical Evacuation"
                        class="rounded-2xl object-cover w-full shadow-lg">
                    <div class="absolute -top-8 -right-8 bg-red-600 text-white px-6 py-3 rounded-full shadow-md">
                        24/7 Response Team
                    </div>
                </div>

                <!-- Right: Text content -->
                <div>
                    <h2 class="text-4xl font-bold mb-6 leading-tight">
                        Emergency Air Ambulance <br /> When Every Second Counts
                    </h2>
                    <p class="text-gray-300 mb-8 leading-relaxed">
                        Northface Aviation provides rapid-response medical flights and emergency evacuations anywhere in
                        the world.
                        Our expert flight medics and pilots are trained to handle the most critical missions with speed,
                        care, and precision.
                    </p>

                    <ul class="space-y-4 text-gray-300">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                            Fully equipped medical aircraft
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                            Licensed and experienced medical crew
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                            Global coverage and rapid deployment
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 bg-red-500 rounded-full"></span>
                            Coordination with hospitals worldwide
                        </li>
                    </ul>

                    <div class="mt-10">
                        <a href="#contact"
                            class="inline-block bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-full font-semibold transition">
                            Request Air Ambulance
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>