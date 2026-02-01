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
            class="bg-green-600 font-bold cursor-pointer disabled:bg-gray-400 duration-500 hover:bg-green-700 hover:rounded-md px-7 py-4 text-sm text-white uppercase"
            :disabled="processing"
            :type="type"
        >
            {{ processing ? "Please wait" : text }}
            <span><i :class="`fa-solid ${icon}`"></i></span>
        </button>
    </div>
</template>
