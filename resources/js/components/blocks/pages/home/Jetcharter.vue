<template>
    <div>
        <section class="bg-black text-white py-24 px-6 md:px-16">
            <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">

                <!-- IMAGE PANEL -->
                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1540962351504-03099e0a754b?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1974"
                        alt="Private Jet Charter"
                        class="rounded-2xl shadow-[0_0_40px_rgba(255,215,0,0.08)] group-hover:shadow-[0_0_60px_rgba(255,215,0,0.15)] transition duration-500" />
                    <div
                        class="absolute bottom-4 left-4 bg-black/70 border border-amber-500/40 rounded-xl px-4 py-2 backdrop-blur-sm">
                        <span class="text-amber-400 font-semibold">Trusted Private Charter</span>
                    </div>
                </div>

                <!-- TEXT PANEL -->
                <div class="space-y-8">
                    <h2 class="text-5xl md:text-6xl font-extrabold leading-tight">
                        <span class="text-amber-400">Elite</span> Private Jet Charter <br />
                        <span class="text-neutral-400">Built Around Your Schedule</span>
                    </h2>

                    <p class="text-neutral-400 text-lg leading-relaxed max-w-lg">
                        We provide premium private jet charter services for business and leisure travelers who value
                        comfort, privacy, and efficiency. From last-minute departures to carefully planned itineraries,
                        every flight is tailored to your needs.
                    </p>

                    <div class="grid grid-cols-2 gap-6 mt-10">
                        <div
                            class="bg-neutral-900 rounded-2xl p-6 border border-neutral-800 hover:border-amber-500/40 transition">
                            <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&q=80&w=800"
                                alt="Private jet luxury cabin interior"
                                class="rounded-lg mb-4 w-full object-cover h-32" />
                            <h3 class="text-xl font-semibold mb-2 text-white">Luxury Cabin Experience</h3>
                            <p class="text-neutral-400 text-sm">Fly in comfort with premium interiors, gourmet catering,
                                and privacy on every journey.</p>
                        </div>

                        <div
                            class="bg-neutral-900 rounded-2xl p-6 border border-neutral-800 hover:border-amber-500/40 transition">
                            <img src="https://images.unsplash.com/photo-1570710891163-6d3b5c47248b?auto=format&fit=crop&q=80&w=800"
                                alt="Private jet on tarmac ready for departure"
                                class="rounded-lg mb-4 w-full object-cover h-32" />
                            <h3 class="text-xl font-semibold mb-2 text-white">Global Fleet Access</h3>
                            <p class="text-neutral-400 text-sm">Choose from light jets to long-range aircraft — matched
                                to your route and group size.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>