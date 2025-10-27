<script setup>
import AboutHero from '@/components/blocks/pages/about/AboutHero.vue';
import GlobalPresence from '@/components/blocks/pages/about/GlobalPresence.vue';
import Mission from '@/components/blocks/pages/about/Mission.vue';
import PagesLayout from '@/layouts/PagesLayout.vue';
import MeetTheTeam from '@/components/blocks/pages/about/MeetTheTeam.vue';
</script>

<template>
    <PagesLayout>

        <AboutHero />
        <Mission />
        <MeetTheTeam />
        <GlobalPresence />
    </PagesLayout>
</template>