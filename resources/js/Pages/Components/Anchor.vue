<script setup>
defineProps({
    link: {
        type: String,
    },

    text: {
        type: String,
    },
});
</script>

<template>
    <Link class="font-bold text-green-600 hover:underline" :href="link">{{
        text
    }}</Link>
</template>
