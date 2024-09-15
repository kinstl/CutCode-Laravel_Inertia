<template>
    <main>
        <menu class="bg-indigo-500 text-white font-bold mb-4">
            <ul class="container mx-auto flex gap-4 py-4">
                <li>
                    <Link :href="route('home')"> Home </Link>
                </li>
                <li>
                    <Link :href="route('about')"> About </Link>
                </li>
                <li>
                    <Link :href="route('users.index')">Users</Link>
                </li>
            </ul>
        </menu>
        <section class="container mx-auto">
            <slot />
        </section>
    </main>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
