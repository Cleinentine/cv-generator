<script setup>
import { Form } from "@inertiajs/vue3";

import Anchor from "../Components/Anchor.vue";
import Button from "../Components/Button.vue";
import Error from "../Components/Error.vue";
import Guest from "../Layouts/Guest.vue";
import Input from "../Components/Input.vue";
import Label from "../Components/Label.vue";
</script>

<template>
    <Guest
        class="mx-auto w-[25%]"
        footerAnchorText="Register"
        footerParagraph="Don't have an account yet?"
        icon="fa-right-to-bracket"
        heading="Sign-In"
        :footerLink="route('register')"
    >
        <Form
            disableWhileProcessing
            method="POST"
            resetOnSuccess
            :action="route('login')"
            :resetOnError="['password']"
            #default="{ errors, processing }"
        >
            <div class="mt-5">
                <Label for="email" text="Email" />

                <Input
                    id="email"
                    icon="fa-at"
                    name="email"
                    placeholder="e.g. johndoe@email.com"
                    type="email"
                />

                <div v-if="errors.email">
                    <Error :message="errors.email" />
                </div>
            </div>

            <div class="mt-5">
                <Label for="password" text="Password" />

                <Input
                    id="password"
                    icon="fa-lock"
                    name="password"
                    placeholder=""
                    type="password"
                />

                <div v-if="errors.password">
                    <Error :message="errors.password" />
                </div>
            </div>

            <div class="grid grid-cols-2 mt-1">
                <div>
                    <input
                        class="cursor-pointer mr-1.5 scale-110 transform"
                        id="remember"
                        name="remember"
                        type="checkbox"
                    />

                    <label class="cursor-text text-sm" for="remember"
                        >Remember Me</label
                    >
                </div>

                <div class="text-right text-sm">
                    <Anchor text="Forgot Password?" :link="route('forgot')" />
                </div>
            </div>

            <Button
                icon="fa-right-to-bracket"
                text="Sign-In"
                type="submit"
                :processing="processing"
            />
        </Form>
    </Guest>
</template>
