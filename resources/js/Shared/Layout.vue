<template>
    <div class="container mx-auto">
        <ul>
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
        <slot />
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
