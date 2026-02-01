<script setup>
import Anchor from "../Components/Anchor.vue";
import Hr from "../Components/Hr.vue";

defineProps({
    footerAnchorText: {
        type: String,
    },

    footerParagraph: {
        type: String,
    },

    footerLink: {
        type: String,
    },

    heading: {
        type: String,
    },

    icon: {
        type: String,
    },
});
</script>

<template>
    <section class="bg-slate-700 mx-auto p-5 rounded-md w-[35%]">
        <header class="grid grid-cols-2 mb-10">
            <div>
                <h2 class="font-black font-montserrat text-4xl uppercase">
                    {{ heading }}
                </h2>
            </div>

            <div class="text-right">
                <h2 class="text-5xl">
                    <span><i :class="`fa-solid ${icon}`"></i></span>
                </h2>
            </div>
        </header>

        <slot />

        <Hr />

        <p class="text-center text-sm">
            {{ footerParagraph }}
            <Anchor :link="footerLink" :text="footerAnchorText" />.
        </p>
    </section>
</template>
