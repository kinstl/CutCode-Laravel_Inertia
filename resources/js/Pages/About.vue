<template>
    <Head :title="title" />
    <h1>{{ title }}</h1>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";

defineProps({
    title: String,
});
</script>
