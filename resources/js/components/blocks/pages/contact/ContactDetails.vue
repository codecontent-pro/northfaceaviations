<script setup lang="ts">
import { useForm, usePage } from '@inertiajs/vue3'
import PagesController from "@/actions/App/Http/Controllers/PagesController";
import { toast } from 'vue-sonner'
import InputError from '@/components/InputError.vue';
import { ref } from 'vue'

const page = usePage();
const form = useForm({
    email: '',
    subject: '',
    message: '',
});
let flashMessage = ref('')

const submit = () => {
    form.submit(PagesController.sendContactForm(), {
        onSuccess: () => {
            form.reset();
        },
        onFinish: () => {
            const success = page.props.flash?.success
            if (success) {
                flashMessage.value = 'Your message has been sent successfully. We will get back to you soon.'
            }
        }
    })
}
</script>

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

                <div v-if="flashMessage" class="bg-green-500 text-white rounded w-full p-4 mb-4">
                    {{ flashMessage }}
                </div>

                <form @submit.prevent="submit" class="space-y-6">

                    <div>
                        <label class="block text-gray-400 mb-2">Email</label>
                        <input v-model="form.email" type="email" placeholder="you@example.com"
                            class="w-full bg-[#111] border border-gray-700 focus:border-orange-300 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition" />
                        <InputError :message="form.errors.email" />
                    </div>

                    <div>
                        <label class="block text-gray-400 mb-2">Title</label>
                        <input v-model="form.subject" type="text" placeholder="Subject"
                            class="w-full bg-[#111] border border-gray-700 focus:border-orange-300 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition" />
                        <InputError :message="form.errors.subject" />
                    </div>

                    <div>
                        <label class="block text-gray-400 mb-2">Message</label>
                        <textarea v-model="form.message" rows="5" placeholder="Type your message..."
                            class="w-full bg-[#111] border border-gray-700 focus:border-orange-300 rounded-xl px-4 py-3 text-white placeholder-gray-500 outline-none transition"></textarea>
                        <InputError :message="form.errors.message" />
                    </div>

                    <button type="submit"
                        class="hover:cursor-pointer hover:bg-orange-500 bg-orange-300 text-white font-semibold px-8 py-4 rounded-full transition duration-300 shadow-lg shadow-orange-300/20">
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
