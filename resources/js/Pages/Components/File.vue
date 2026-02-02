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
            class="bg-slate-900 border-2 border-slate-800 cursor-pointer font-roboto outline-none pl-[2.813rem] placeholder:italic px-7 py-3 rounded-md text-emerald-500 text-sm w-full"
            type="file"
            :id="id"
            :name="name"
        />

        <span class="absolute left-3 pointer-events-none text-slate-600 top-3">
            <i :class="`fa-solid fa-image`"></i>
        </span>
    </div>
</template>
