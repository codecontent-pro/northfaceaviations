<template>
    <section class="bg-black text-white py-24 px-6 md:px-16 lg:px-24">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold">
                    Our <span class="text-orange-300">Global Presence</span>
                </h2>
                <p class="text-gray-400 max-w-2xl mx-auto mt-4">
                    We operate across continents — rapid, reliable medical air transport where it matters most.
                </p>
            </div>

            <!-- Map container -->
            <div class="relative bg-neutral-900/30 rounded-xl p-6 md:p-10 overflow-hidden">
                <!-- Decorative gradient glow -->
                <div class="absolute inset-0 pointer-events-none">
                    <div class="absolute -left-32 -top-32 w-96 h-96 rounded-full bg-orange-300/5 blur-3xl"></div>
                    <div class="absolute -right-32 -bottom-32 w-96 h-96 rounded-full bg-amber-400/3 blur-3xl"></div>
                </div>

                <!-- SVG world map (simplified path) -->
                <div class="relative w-full h-[420px] md:h-[540px]">
                    <svg viewBox="0 0 1600 800" xmlns="http://www.w3.org/2000/svg" class="w-full h-full" role="img"
                        aria-label="World map showing operation locations">
                        <!-- subtle map outline (monochrome) -->
                        <g fill="none" stroke="#2b2b2b" stroke-width="1" opacity="0.9">
                            <!-- NOTE: simplified shapes for visual effect (not geographic-accurate detail) -->
                            <path
                                d="M40 300 C80 200, 160 180, 260 210 C360 240, 440 220, 520 260 C580 290, 640 310, 720 300 C780 292, 860 280, 920 300 C1000 330, 1100 340, 1200 320 C1300 300, 1380 280, 1560 260" />
                            <path
                                d="M30 420 C110 380, 200 390, 300 420 C390 445, 480 440, 560 460 C640 480, 720 480, 820 460 C900 445, 980 430, 1080 430 C1180 430, 1300 430, 1550 440" />
                            <!-- more faint shapes for continents -->
                            <path d="M200 120 C260 100, 340 120, 420 140 C500 160, 560 140, 640 160" opacity="0.6" />
                        </g>

                        <!-- Optional faint landmass fills for depth -->
                        <g fill="#111" opacity="0.8">
                            <ellipse cx="520" cy="280" rx="360" ry="80" />
                            <ellipse cx="1020" cy="380" rx="420" ry="100" />
                            <ellipse cx="340" cy="420" rx="260" ry="70" />
                        </g>

                        <!-- Dots: bound to data with transforms -->
                        <g id="dots">
                            <template v-for="(loc, idx) in locations" :key="loc.name">
                                <!-- pulsing circle -->
                                <circle :cx="(loc.x * 1600) / 100" :cy="(loc.y * 800) / 100" r="12" class="dot-base"
                                    :data-name="loc.name" :data-desc="loc.desc" @mouseenter="showTooltip($event, loc)"
                                    @mouseleave="hideTooltip" @focus="showTooltip($event, loc)" @blur="hideTooltip" />
                                <!-- small center -->
                                <circle :cx="(loc.x * 1600) / 100" :cy="(loc.y * 800) / 100" r="5" fill="#ff4d4d"
                                    stroke="#ffffff33" />
                            </template>
                        </g>
                    </svg>

                    <!-- Tooltip -->
                    <div v-if="tooltip.show" :style="{ left: tooltip.x + 'px', top: tooltip.y + 'px' }"
                        class="pointer-events-none absolute z-30 transform -translate-x-1/2 -translate-y-full">
                        <div
                            class="bg-black/90 text-white text-sm px-3 py-2 rounded-md border border-white/10 shadow-lg whitespace-nowrap">
                            <div class="font-semibold">{{ tooltip.name }}</div>
                            <div class="text-gray-300 text-xs mt-1">{{ tooltip.desc }}</div>
                        </div>
                        <div class="w-3 h-3 bg-black/90 transform rotate-45 -mt-1 border border-white/10 mx-auto"></div>
                    </div>
                </div>

                <!-- Small legend / counts -->
                <div class="mt-8 flex flex-wrap items-center justify-between gap-4">
                    <div class="text-gray-300">
                        <span class="text-2xl font-bold text-white">50+</span>
                        <span class="block text-sm text-gray-400">Countries covered</span>
                    </div>
                    <div class="text-gray-300">
                        <span class="text-2xl font-bold text-white">24/7</span>
                        <span class="block text-sm text-gray-400">Global operations</span>
                    </div>
                    <div class="hidden md:block text-gray-300 max-w-lg">
                        <p class="text-sm text-gray-400">
                            Hover the red points on the map to see regions where we operate — from West Africa to the
                            Middle East,
                            Europe, and beyond.
                        </p>
                    </div>
                    <a href="#contact"
                        class="ml-auto md:ml-0 inline-block bg-orange-400 hover:bg-orange-700 text-white px-5 py-2 rounded-full text-sm font-semibold transition">
                        Request Assistance
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from "vue";

/**
 * locations: x,y are percentages relative to the SVG viewBox (1600x800).
 * Adjust x/y to position points visually on the simplified map.
 */
const locations = ref([
    { name: "Nigeria", desc: "Headquarters — Abuja & Lagos", x: 34, y: 36 },
    { name: "Ghana", desc: "Accra region operations", x: 30, y: 38 },
    { name: "Kenya", desc: "East Africa hub", x: 46, y: 46 },
    { name: "South Africa", desc: "Operations & partners", x: 45, y: 68 },
    { name: "United Kingdom", desc: "European transfers", x: 57, y: 30 },
    { name: "United Arab Emirates", desc: "Gulf operations", x: 68, y: 34 },
    { name: "India", desc: "South Asia reach", x: 78, y: 44 },
    { name: "United States", desc: "North America partners", x: 18, y: 26 },
]);

const tooltip = ref({
    show: false,
    name: "",
    desc: "",
    x: 0,
    y: 0,
});

function showTooltip(event, loc) {
    // compute position relative to the map container
    const container = event.currentTarget.ownerSVGElement.getBoundingClientRect();
    const cx = (loc.x / 100) * container.width + container.left;
    const cy = (loc.y / 100) * container.height + container.top;

    // Slight offset above the dot
    tooltip.value = {
        show: true,
        name: loc.name,
        desc: loc.desc,
        x: cx - container.left, // relative to map container
        y: cy - container.top - 16, // move tooltip above the dot
    };
}

function hideTooltip() {
    tooltip.value.show = false;
}

onMounted(() => {
    // accessibility: allow keyboard nav to dots (SVG <circle> not normally focusable)
    // If needed, you can convert circles to <a> elements with tabindex or add keyboard handlers.
});
</script>

<style scoped>
/* pulsing ring effect for the dot */
.dot-base {
    fill: none;
    stroke: #ff4d4d;
    stroke-width: 2;
    opacity: 0.85;
    filter: drop-shadow(0 6px 16px rgba(255, 77, 77, 0.12));
    animation: pulse 2s infinite;
}

/* reduce pulse on small screens */
@media (max-width: 640px) {
    .dot-base {
        stroke-width: 1.5;
        animation-duration: 2.6s;
    }
}

@keyframes pulse {
    0% {
        r: 12;
        stroke-opacity: 0.9;
        transform: scale(1);
    }

    50% {
        r: 28;
        stroke-opacity: 0.18;
        transform: scale(1.08);
    }

    100% {
        r: 12;
        stroke-opacity: 0.9;
        transform: scale(1);
    }
}
</style>
