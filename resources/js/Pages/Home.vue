<script setup>
import LoginForm from "./Layouts/LoginForm.vue";
import { usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const page = usePage();
const user = computed(() => page.props.auth.user);
</script>

<template>
    <Head :title="$page.component" />

    <div v-if="user">
        <h2>I'm a breedable bbc cheating slut dirty whore</h2>
    </div>

    <div v-else>
        <LoginForm />
    </div>
</template>
