<script setup>
import { useForm } from "@inertiajs/vue3";

import Button from "../Components/Button.vue";
import Guest from "../Layouts/Guest.vue";
import Input from "../Components/Input.vue";
import Label from "../Components/Label.vue";

const inputIcons = [
    "fa-tag",
    "fa-tag",
    "fa-tag",
    "fa-address-card",
    "fa-at",
    "fa-mobile",
    "fa-key",
    "fa-redo",
];

const inputLabels = [
    "First Name",
    "Middle Name",
    "Last Name",
    "Complete Address",
    "Email",
    "Mobile Number",
    "Password",
    "Repeat Password",
];

const inputModels = [
    "first_name",
    "middle_name",
    "last_name",
    "address",
    "email",
    "mobile",
    "password",
    "password_confirmation",
];

const inputPlaceholders = [
    "e.g. John",
    "e.g. Jane",
    "e.g. Doe",
    "e.g. Maura, Aparri, Cagayan",
    "e.g. johndoe@email.com",
    "e.g. 9123456789",
    "e.g. password12345!",
    "e.g. password12345!",
];

const inputTypes = [
    "text",
    "text",
    "text",
    "text",
    "email",
    "text",
    "password",
    "password",
];

const form = useForm({
    first_name: "",
    middle_name: "",
    last_name: "",
    email: "",
    mobile: "",
    password: "",
    password_confirmation: "",
    address: "",
});
</script>

<template>
    <Guest
        footerAnchorText="Sign In"
        footerParagraph="Already registered?"
        icon="fa-user-plus"
        heading="Sign-Up"
        :footerLink="route('login')"
    >
        <form @submit.prevent="submit">
            <div
                class="mt-5"
                v-for="(inputModel, inputIndex) in inputModels"
                :key="inputIndex"
            >
                <Label
                    :for="inputModels[inputIndex]"
                    :text="inputLabels[inputIndex]"
                />

                <Input
                    :id="inputModels[inputIndex]"
                    :icon="inputIcons[inputIndex]"
                    :model="inputModels[inputIndex]"
                    :placeholder="inputPlaceholders[inputIndex]"
                    :type="inputTypes[inputIndex]"
                    v-model="form[inputModel]"
                />
            </div>

            <Button icon="fa-user-plus" text="Sign-Up" type="submit" />
        </form>
    </Guest>
</template>
