<script setup>
defineProps({
    icon: {
        type: String,
    },

    processing: {
        default: false,
        type: Boolean,
    },

    text: {
        type: String,
    },

    type: {
        type: String,
    },
});
</script>

<template>
    <div class="mt-5 text-center">
        <button
            class="bg-emerald-500 font-bold cursor-pointer disabled:bg-emerald-600 duration-500 hover:rounded-lg outline-none px-7 py-4 text-sm uppercase"
            :disabled="processing"
            :type="type"
        >
            {{ processing ? "Please wait" : text }}
            <span><i :class="`fa-solid ${icon}`"></i></span>
        </button>
    </div>
</template>
