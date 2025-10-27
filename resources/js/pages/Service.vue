<script setup>
import OurFleet from '@/components/blocks/pages/servicePage/OurFleet.vue';
import ServiceHero from '@/components/blocks/pages/servicePage/ServiceHero.vue';
import WhyContactUs from '@/components/blocks/pages/servicePage/WhyContactUs.vue';
import PagesLayout from '@/layouts/PagesLayout.vue';
</script>

<template>
    <PagesLayout>
        <ServiceHero />
        <OurFleet />
        <WhyContactUs />
    </PagesLayout>
</template>