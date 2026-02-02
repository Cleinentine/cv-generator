<script setup>
const props = defineProps({
    id: {
        type: String,
    },

    icon: {
        type: String,
    },

    modelValue: {
        type: String,
    },

    name: {
        type: String,
    },

    placeholder: {
        type: String,
    },

    type: {
        type: String,
    },
});

const emit = defineEmits(["update:modelValue"]);

function handleInput(event) {
    emit("update:modelValue", event.target.value);
}
</script>

<template>
    <div class="relative">
        <input
            autocomplete="on"
            class="bg-slate-900 border-2 border-slate-800 font-roboto outline-none pl-[2.813rem] placeholder:italic px-7 py-3 rounded-md text-sm w-full"
            :id="id"
            :name="name"
            :placeholder="placeholder"
            :type="type"
            :value="modelValue"
            @input="handleInput"
        />

        <span class="absolute left-3 pointer-events-none text-slate-600 top-3">
            <i :class="`fa-solid ${icon}`"></i>
        </span>
    </div>
</template>
