<template>
    <p
        v-if="visible"
        class="relative bg-indigo-800 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8"
    >
        {{ $page.props.message }}
        <button
            @click="closeMessage"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white"
        >
            &times;
        </button>
    </p>
    <main>
        <nav class="bg-indigo-500 text-white font-bold mb-4">
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
        </nav>
        <section class="container mx-auto">
            <slot />
        </section>
    </main>
</template>

<script setup>
import { ref, onMounted, watch } from "vue";
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();

const visible = ref(false);
const message = ref("");

const closeMessage = () => {
    visible.value = false;
};

watch(
    () => page.props.message,
    (newMessage) => {
        if (newMessage) {
            message.value = newMessage;
            visible.value = true;

            setTimeout(() => {
                visible.value = false;
            }, 5000);
        }
    }
);

onMounted(() => {
    if (page.props.message) {
        message.value = page.props.message;
        visible.value = true;

        setTimeout(() => {
            visible.value = false;
        }, 5000);
    }
});
</script>
