<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <p class="mt-1 text-rose-400 text-sm">
        <span><i class="fa-solid fa-times-circle"></i></span>
        {{ message }}
    </p>
</template>
