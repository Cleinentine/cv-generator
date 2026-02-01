<script setup>
defineProps({
    for: {
        type: String,
    },

    text: {
        type: String,
    },
});
</script>

<template>
    <label class="cursor-text text-sm" :for="for">{{ text }}:</label>
</template>
