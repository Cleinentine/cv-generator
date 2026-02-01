<script setup>
const props = defineProps({
    dataset: {
        type: Array,
    },

    icon: {
        type: String,
    },

    id: {
        type: String,
    },

    modelValue: {
        type: [String, Number],
    },
});

const emit = defineEmits(["update:modelValue"]);

function handleChange(event) {
    emit("update:modelValue", event.target.value);
}
</script>

<template>
    <div class="relative">
        <select
            class="bg-slate-900 border-2 border-green-800 cursor-pointer outline-none pl-[2.813rem] placeholder:italic px-7 py-3 rounded-md text-sm w-full"
            :id="id"
            :value="modelValue"
            @change="handleChange"
        >
            <option value="">-- Select --</option>

            <option :value="data.id" v-for="data in dataset" :key="data.id">
                {{ data.name }}
            </option>
        </select>

        <span class="absolute left-3 pointer-events-none text-green-600 top-3">
            <i :class="`fa-solid ${icon}`"></i>
        </span>
    </div>
</template>
