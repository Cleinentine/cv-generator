<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <aside
        class="bg-slate-900 fixed inset-y-0 left-0 w-18 py-5 text-center text-white"
    >
        <nav>
            <ul>
                <li>
                    <Link
                        class="block duration-500 hover:bg-emerald-600 p-5 text-2xl"
                        :href="route('home')"
                    >
                        <span><i class="fa-solid fa-home"></i></span>
                    </Link>
                </li>

                <div v-if="!$page.props.auth.user">
                    <li>
                        <Link
                            class="block duration-500 hover:bg-emerald-600 p-5 text-2xl"
                            :href="route('register')"
                        >
                            <span><i class="fa-solid fa-user-plus"></i></span>
                        </Link>
                    </li>

                    <li>
                        <Link
                            class="block duration-500 hover:bg-emerald-600 p-5 text-2xl"
                            :href="route('forgot')"
                        >
                            <span><i class="fa-solid fa-paper-plane"></i></span>
                        </Link>
                    </li>
                </div>

                <li class="absolute bottom-5 w-full" v-else>
                    <Link
                        as="button"
                        class="block cursor-pointer duration-500 hover:bg-emerald-600 p-5 text-2xl w-full"
                        method="post"
                        :href="route('logout')"
                    >
                        <span
                            ><i class="fa-solid fa-right-from-bracket"></i
                        ></span>
                    </Link>
                </li>

                <li>
                    <Link
                        class="block duration-500 hover:bg-emerald-600 p-5 text-2xl"
                        :href="route('contact')"
                    >
                        <span><i class="fa-solid fa-address-book"></i></span>
                    </Link>
                </li>

                <li>
                    <Link
                        class="block duration-500 hover:bg-emerald-600 p-5 text-2xl"
                        :href="route('feedback')"
                    >
                        <span><i class="fa-solid fa-message"></i></span>
                    </Link>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="ml-18 min-h-screen">
        <section class="w-full p-5">
            <div class="w-full max-w-450 mx-auto">
                <slot />
            </div>
        </section>

        <!-- <footer class="bg-slate-900 p-5 text-center text-sm text-green-400">
            <h2>&copy; 2025. All Rights Reserved.</h2>
        </footer> -->
    </main>
</template>
