<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import PagesController from "@/actions/App/Http/Controllers/PagesController";
</script>

<template>
    <footer class="bg-black text-gray-300 pt-16 pb-10 border-t border-gray-800">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid md:grid-cols-4 gap-10">

                <!-- Brand / About -->
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4">{{ $page.props.appName }}</h3>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Providing 24/7 medical evacuation, air charter, and logistics services worldwide.
                        Safety and speed are at the heart of everything we do.
                    </p>
                    <div class="flex gap-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-orange-500 transition"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-orange-500 transition"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-orange-500 transition"><i
                                class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="text-gray-400 hover:text-orange-500 transition"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-semibold text-lg mb-4">Quick Links</h4>
                    <ul class="space-y-3">
                        <li>
                            <Link :href="PagesController.home()" class="hover:text-orange-500 transition">Home</Link>
                        </li>
                        <li>
                            <Link :href="PagesController.about()" class="hover:text-orange-500 transition">About</Link>
                        </li>
                        <li>
                            <Link :href="PagesController.service()" class="hover:text-orange-500 transition">Services
                            </Link>
                        </li>
                        <li>
                            <Link :href="PagesController.contact()" class="hover:text-orange-500 transition">Contact
                            </Link>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-white font-semibold text-lg mb-4">Our Services</h4>
                    <ul class="space-y-3">
                        <li>
                            <Link href="/services/air-ambulance" class="hover:text-orange-500 transition">Air
                                Ambulance</Link>
                        </li>
                        <li>
                            <Link href="/services/private-jet-helicopter-charter"
                                class="hover:text-orange-500 transition">Private Jet
                                / Helicopter Charter</Link>
                        </li>
                        <li>
                            <Link href="/services/air-cargo" class="hover:text-orange-500 transition">Air Cargo
                            </Link>
                        </li>
                        <li>
                            <Link href="/services/aircraft-management" class="hover:text-orange-500 transition">Aircraft
                                Management</Link>
                        </li>
                        <li>
                            <Link href="/services/aircraft-sale-lease" class="hover:text-orange-500 transition">Aircraft
                                Sale / Lease</Link>
                        </li>
                        <li>
                            <Link href="/services/travel-support" class="hover:text-orange-500 transition">Flight
                                Booking / Hotel Reservation / Airport Transfer / Visa Assistance</Link>
                        </li>
                        <li>
                            <Link href="/services/aviation-consultancy" class="hover:text-orange-500 transition">
                                Aviation
                                Consultancy</Link>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-white font-semibold text-lg mb-4">Contact Us</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-location-dot text-orange-500 mt-1 shrink-0"></i>
                            <span><span class="text-gray-300 font-medium">Headquarters:</span><br />General Aviation
                                Terminal, Nnamdi Azikiwe International Airport, Abuja, Nigeria</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-location-dot text-orange-500 mt-1 shrink-0"></i>
                            <span><span class="text-gray-300 font-medium">Branch Office:</span><br />Suite 106, Orago
                                Commercial Complex, Area 10, Garki, Abuja</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-location-dot text-orange-500 mt-1 shrink-0"></i>
                            <span><span class="text-gray-300 font-medium">Nasarawa State Office:</span><br />No. 5 Esson
                                Mairiga Street, Lafia, Nasarawa State</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-phone text-orange-500 shrink-0"></i>
                            <a href="tel:+2348032157301" class="hover:text-orange-400 transition">+234 803 215 7301</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-envelope text-orange-500 shrink-0"></i>
                            <a href="mailto:northstaraviationsolutions@gmail.com"
                                class="hover:text-orange-400 transition break-all">northstaraviationsolutions@gmail.com</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-envelope text-orange-500 shrink-0"></i>
                            <a href="mailto:info@northstaraviations.com"
                                class="hover:text-orange-400 transition break-all">info@northstaraviations.com</a>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <Link :href="PagesController.contact()"
                            class="inline-block bg-orange-400 hover:bg-orange-600 text-white px-6 py-2 rounded-full text-sm font-semibold transition">
                            Get in Touch
                        </Link>
                    </div>
                </div>

            </div>

            <!-- Bottom -->
            <div
                class="mt-16 border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; <span id="year">{{ new Date().getFullYear() }}</span>
                    {{ $page.props.appName }} All rights reserved.
                </p>
                <p>Developed by <a href="https://codecontent.pro" target="_blank" rel="noopener"
                        class="text-orange-300 hover:underline">CodeContent</a>
                </p>
            </div>
        </div>
    </footer>

</template>

<script>

</script>