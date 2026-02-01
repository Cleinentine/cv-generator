<script setup>
import { useForm } from "@inertiajs/vue3";

import Anchor from "../Components/Anchor.vue";
import Button from "../Components/Button.vue";
import Guest from "../Layouts/Guest.vue";
import Input from "../Components/Input.vue";
import Label from "../Components/Label.vue";

const form = useForm({
    email: "",
    password: "",
    remember: "",
});
</script>

<template>
    <Guest
        footerAnchorText="Register"
        footerParagraph="Don't have an account yet?"
        icon="fa-right-to-bracket"
        heading="Sign-In"
        :footerLink="route('register')"
    >
        <form @submit.prevent="submit">
            <div class="mt-5">
                <Label for="email" text="Email" />

                <Input
                    id="email"
                    icon="fa-at"
                    placeholder="e.g. johndoe@email.com"
                    type="email"
                    v-model="form.email"
                />
            </div>

            <div class="mt-5">
                <Label for="password" text="Password" />

                <Input
                    id="password"
                    icon="fa-lock"
                    placeholder=""
                    type="password"
                    v-model="form.password"
                />
            </div>

            <div class="grid grid-cols-2 mt-1">
                <div>
                    <input
                        class="cursor-pointer mr-1.5 scale-110 transform"
                        id="remember"
                        type="checkbox"
                        v-model="form.remember"
                    />

                    <label class="cursor-text text-sm" for="remember"
                        >Remember Me</label
                    >
                </div>

                <div class="text-right text-sm">
                    <Anchor text="Forgot Password?" :link="route('forgot')" />
                </div>
            </div>

            <Button icon="fa-right-to-bracket" text="Sign-In" type="submit" />
        </form>
    </Guest>
</template>
