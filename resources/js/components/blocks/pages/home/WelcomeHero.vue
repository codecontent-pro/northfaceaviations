<template>
    <div>
        <section class="min-h-screen bg-slate-950 text-white flex items-center px-8 pt-28 md:pt-0 md:px-20">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center w-full">
                <!-- Left: Text -->
                <div class="space-y-6">
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                        When Every <span class="text-orange-300">Second</span> Counts,<br />
                        We Fly You To <span class="text-orange-300">Safety</span>.
                    </h1>

                    <p class="text-gray-400 text-lg max-w-md">
                        Fast, reliable, and life-saving air ambulance services — available 24/7.
                        Our mission: getting you or your loved ones the critical care they need, fast.
                    </p>

                    <button
                        class="bg-orange-400 hover:bg-orange-600 transition px-6 py-3 rounded-full font-semibold text-white text-lg shadow-lg"
                        @click="bookCall">
                        Book a Call
                    </button>
                </div>

                <!-- Right: Image + Card -->
                <div class="relative w-full flex justify-center">
                    <img src="https://images.unsplash.com/photo-1696243144413-503bc482a608?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2071"
                        alt="Air Ambulance" class="w-full h-[500px] object-cover rounded-2xl brightness-75" />

                    <div
                        class="absolute bottom-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 shadow-lg max-w-xs">
                        <h3 class="text-xl font-bold mb-2 text-white">24/7 Emergency Response</h3>
                        <p class="text-gray-300 text-sm">
                            Our dedicated medical flight team is ready to move — anywhere, anytime.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>