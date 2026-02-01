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
            class="bg-slate-900 border-2 border-green-800 outline-none pl-[2.813rem] placeholder:italic px-7 py-3 rounded-md text-sm w-full"
            :id="id"
            :placeholder="placeholder"
            :type="type"
            :value="modelValue"
            @input="handleInput"
        />

        <span class="absolute left-3 pointer-events-none text-green-600 top-3">
            <i :class="`fa-solid ${icon}`"></i>
        </span>
    </div>
</template>
