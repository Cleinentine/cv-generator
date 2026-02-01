<script setup>
const navIcons = [
    "fa-house",
    "fa-user-plus",
    "fa-paper-plane",
    "fa-address-book",
    "fa-message",
];

const navRoutes = [
    route("home"),
    route("register"),
    route("forgot"),
    route("contact"),
    route("feedback"),
];
</script>

<template>
    <aside
        class="bg-slate-900 fixed h-screen py-5 text-center text-white w-[4%]"
    >
        <nav>
            <ul>
                <li v-for="(navRoute, navIndex) in navRoutes" :key="navIndex">
                    <Link
                        class="block duration-500 hover:bg-green-600 p-5 text-2xl"
                        :href="navRoute"
                    >
                        <span
                            ><i :class="`fa-solid ${navIcons[navIndex]}`"></i
                        ></span>
                    </Link>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="max-w-screen-2xl mx-auto relative w-[96%]">
        <section class="p-5">
            <slot />
        </section>

        <!-- <footer class="bg-slate-900 p-5 text-center text-sm text-green-400">
            <h2>&copy; 2025. All Rights Reserved.</h2>
        </footer> -->
    </main>
</template>
