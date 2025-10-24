<script setup>
import PagesLayout from '@/layouts/PagesLayout.vue';
import HeroSection from '@/components/blocks/pages/home/WelcomeHero.vue';
import WhyChooseUs from '@/components/blocks/pages/home/WhyChooseUs.vue';
import TrustSection from '@/components/blocks/pages/home/TrustSection.vue';
</script>

<template>
    <PagesLayout>
        <HeroSection />
        <WhyChooseUs />
        <TrustSection />
    </PagesLayout>
</template>

<style scoped>
/* Optional: subtle gradient overlay for the section */
section {
    background: radial-gradient(circle at top left, #111 0%, #000 70%);
}
</style>
