<script setup lang="ts">
import AppLayout from '@/layouts/app/AppSidebarLayout.vue';
import type { BreadcrumbItemType } from '@/types';
import NavPages from '@/components/NavPages.vue';
import NavPagesFooter from '@/components/NavPagesFooter.vue';

interface Props {
    breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});

const bookCall = () => {
    window.open("https://calendly.com/yourclient/air-ambulance-call", "_blank");
}
</script>

<template>
    <NavPages />
    <div :breadcrumbs="breadcrumbs">
        <slot />
        <NavPagesFooter />
    </div>
</template>
