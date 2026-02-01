<script setup>
import { Form } from "@inertiajs/vue3";

import Button from "../Components/Button.vue";
import Error from "../Components/Error.vue";
import File from "../Components/File.vue";
import Guest from "../Layouts/Guest.vue";
import Input from "../Components/Input.vue";
import Label from "../Components/Label.vue";

const icons = [
    "fa-tag",
    "fa-tag",
    "fa-tag",
    "fa-address-card",
    "fa-at",
    "fa-mobile",
    "fa-key",
    "fa-redo",
];

const labels = [
    "First Name",
    "Middle Name",
    "Last Name",
    "Complete Address",
    "Email",
    "Phone Number",
    "Password",
    "Repeat Password",
];

const models = [
    "first_name",
    "middle_name",
    "last_name",
    "address",
    "email",
    "phone_number",
    "password",
    "password_confirmation",
];

const placeholders = [
    "e.g. John",
    "e.g. Jane",
    "e.g. Doe",
    "e.g. Maura, Aparri, Cagayan",
    "e.g. johndoe@email.com",
    "e.g. 9123456789",
    "e.g. password12345!",
    "e.g. password12345!",
];

const types = [
    "text",
    "text",
    "text",
    "text",
    "email",
    "text",
    "password",
    "password",
];
</script>

<template>
    <Guest
        footerAnchorText="Sign In"
        footerParagraph="Already registered?"
        icon="fa-user-plus"
        heading="Sign-Up"
        :footerLink="route('login')"
    >
        <Form
            disableWhileProcessing
            method="POST"
            resetOnSuccess
            :action="route('register')"
            :resetOnError="[
                'profile_picture',
                'password',
                'password_confirmation',
            ]"
            #default="{ errors, processing }"
        >
            <div class="mt-5">
                <Label for="profile_picture" text="Profile Picture" />
                <File id="profile_picture" name="profile_picture" />

                <div v-if="errors.profile_picture">
                    <Error :message="errors.profile_picture" />
                </div>
            </div>

            <div class="mt-5" v-for="(model, index) in models" :key="index">
                <Label :for="models[index]" :text="labels[index]" />

                <Input
                    :id="models[index]"
                    :icon="icons[index]"
                    :name="models[index]"
                    :placeholder="placeholders[index]"
                    :type="types[index]"
                />

                <div v-if="errors[model]">
                    <Error :message="errors[model]" />
                </div>
            </div>

            <Button
                icon="fa-user-plus"
                text="Sign-Up"
                type="submit"
                :processing="processing"
            />
        </Form>
    </Guest>
</template>
