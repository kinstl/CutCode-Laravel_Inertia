<template>
    <h1>{{ title }}</h1>
</template>

<script setup>
import { toRefs } from "vue";

const props = defineProps({
    title: String,
});

const { title } = toRefs(props);
</script>
