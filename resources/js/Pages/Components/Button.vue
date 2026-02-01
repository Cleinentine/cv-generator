<script setup>
defineProps({
    icon: {
        type: String,
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
            class="bg-green-600 font-bold cursor-pointer duration-500 hover:bg-green-700 hover:rounded-md px-7 py-4 text-sm text-white uppercase"
            :type="type"
        >
            {{ text }} <span><i :class="`fa-solid ${icon}`"></i></span>
        </button>
    </div>
</template>
