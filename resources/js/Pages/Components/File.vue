<script setup>
const props = defineProps({
    id: {
        type: String,
    },

    modelValue: {
        type: String,
    },

    name: {
        type: String,
    },
});
</script>

<template>
    <div class="relative">
        <input
            accept="image/*"
            class="bg-slate-900 border-2 border-green-800 cursor-pointer outline-none pl-[2.813rem] placeholder:italic px-7 py-3 rounded-md text-green-600 text-sm w-full"
            type="file"
            :id="id"
            :name="name"
        />

        <span class="absolute left-3 pointer-events-none text-green-600 top-3">
            <i :class="`fa-solid fa-image`"></i>
        </span>
    </div>
</template>
