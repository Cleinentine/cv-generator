<script setup></script>

<template>
    <aside
        class="bg-slate-900 fixed h-screen py-5 text-center text-white w-[4%]"
    >
        <nav>
            <ul>
                <li>
                    <Link
                        class="block duration-500 hover:bg-green-600 p-5 text-2xl"
                        :href="route('home')"
                    >
                        <span><i class="fa-solid fa-house"></i></span>
                    </Link>
                </li>

                <li>
                    <Link
                        class="block duration-500 hover:bg-green-600 p-5 text-2xl"
                        :href="route('login')"
                    >
                        <span><i class="fa-solid fa-user-plus"></i></span>
                    </Link>
                </li>

                <li>
                    <Link
                        class="block duration-500 hover:bg-green-600 p-5 text-2xl"
                        :href="route('forgot')"
                    >
                        <span><i class="fa-solid fa-paper-plane"></i></span>
                    </Link>
                </li>

                <li>
                    <Link
                        class="block duration-500 hover:bg-green-600 p-5 text-2xl"
                        :href="route('contact')"
                    >
                        <span><i class="fa-solid fa-address-book"></i></span>
                    </Link>
                </li>

                <li>
                    <Link
                        class="block duration-500 hover:bg-green-600 p-5 text-2xl"
                        :href="route('feedback')"
                    >
                        <span><i class="fa-solid fa-message"></i></span>
                    </Link>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="float-right relative w-[96%]">
        <section class="p-5">
            <slot />
        </section>

        <!-- <footer class="bg-slate-900 p-5 text-center text-sm text-green-400">
            <h2>&copy; 2025. All Rights Reserved.</h2>
        </footer> -->
    </main>
</template>
