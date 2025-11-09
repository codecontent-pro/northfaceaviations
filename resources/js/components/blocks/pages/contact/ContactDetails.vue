<template>
    <section id="contact-form" class="relative bg-[#0a0a0a] text-white py-24 px-6 md:px-16 lg:px-24 overflow-hidden">
        <!-- Background Glow -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute -top-20 -left-20 w-96 h-96 bg-orange-300/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-[32rem] h-[32rem] bg-blue-600/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-start relative z-10">
            <!-- Contact Form -->
            <div>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
                    Send Us a Message
                </h2>
                <p class="text-gray-400 mb-8">
                    Have an inquiry or need immediate assistance?
                    Fill out the form and our operations team will reach out within minutes.
                </p>

                <form class="space-y-6">
                    <div>
                        <label class="block text-gray-400 mb-2">Full Name</label>
                        <input type="text" placeholder="Your name"
                            class="w-full bg-[#111] border border-gray-700 focus:border-orange-300 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition" />
                    </div>

                    <div>
                        <label class="block text-gray-400 mb-2">Email</label>
                        <input type="email" placeholder="you@example.com"
                            class="w-full bg-[#111] border border-gray-700 focus:border-orange-300 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition" />
                    </div>

                    <div>
                        <label class="block text-gray-400 mb-2">Message</label>
                        <textarea rows="5" placeholder="Type your message..."
                            class="w-full bg-[#111] border border-gray-700 focus:border-orange-300 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition"></textarea>
                    </div>

                    <button type="submit"
                        class="bg-orange-300 hover:bg-orange-300 text-white font-semibold px-8 py-4 rounded-full transition duration-300 shadow-lg shadow-orange-300/20">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="bg-[#111] border border-gray-800 rounded-2xl p-8 shadow-lg shadow-black/30">
                    <h3 class="text-xl font-bold mb-4 text-orange-300">Head Office</h3>
                    <p class="text-gray-300">
                        General Aviation Terminal, Nnamdi Azikiwe International Airport Abuja, Nigeria
                        <br />
                        <span class="text-gray-400 text-sm">Mon – Fri: 8:00 AM – 6:00 PM</span>
                    </p>
                </div>

                <div class="bg-[#111] border border-gray-800 rounded-2xl p-8 shadow-lg shadow-black/30">
                    <h3 class="text-xl font-bold mb-4 text-orange-300">Operations Center</h3>
                    <p class="text-gray-300">
                        Suite 106, Orago commercial complex, Area 10, garki Abuja – 24/7 Active
                        <br />
                        <span class="text-gray-400 text-sm">Always ready for dispatch and coordination</span>
                    </p>
                </div>

                <div class="bg-[#111] border border-gray-800 rounded-2xl p-8 shadow-lg shadow-black/30">
                    <h3 class="text-xl font-bold mb-4 text-orange-300">Emergency Line</h3>
                    <p class="text-gray-300 text-lg font-semibold">
                        📞 +234 8032157301
                    </p>
                    <p class="text-gray-400 text-sm mt-2">
                        Available 24/7 for immediate evacuation requests.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
