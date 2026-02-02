<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <p>{{ message }}</p>
</template>
