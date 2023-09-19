<template>
    <div>
        <h1>{{ message }}</h1>
        <h1>{{ sample }}</h1>
        <Link href="/2">Page 2</Link>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    defineProps({
        message: String,
        sample: String
    })
</script>

<style scoped>
    
</style>