<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
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
                            <Link :href="PagesController.service()" class="hover:text-orange-500 transition">Air
                            Ambulance</Link>
                        </li>
                        <li>
                            <Link :href="PagesController.service()" class="hover:text-orange-500 transition">Medical
                            Evacuation</Link>
                        </li>
                        <li>
                            <Link :href="PagesController.service()" class="hover:text-orange-500 transition">Private
                            Charter</Link>
                        </li>
                        <li>
                            <Link :href="PagesController.service()" class="hover:text-orange-500 transition">Cargo
                            Logistics</Link>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-white font-semibold text-lg mb-4">Contact Us</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li><i class="fa-solid fa-location-dot text-orange-500 mr-2"></i>Abuja, Nigeria</li>
                        <li><i class="fa-solid fa-phone text-orange-500 mr-2"></i>+234 8032157301</li>
                        <li><i class="fa-solid fa-envelope text-orange-500 mr-2"></i>info@northstaraviations.com</li>
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