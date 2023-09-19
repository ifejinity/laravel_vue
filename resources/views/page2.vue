<template>
    <h2>Page 2</h2>
    <div v-if="errors.name">{{ errors.name }}</div>
    <div v-if="errors.email">{{ errors.email }}</div>
    <div v-if="errors.address">{{ errors.address }}</div>
    <form @submit.prevent="submit">
        <label for="name">Name:</label>
        <input id="name" v-model="form.name" />
        <label for="email">Email:</label>
        <input id="email" v-model="form.email" />
        <label for="address">Address:</label>
        <input id="address" v-model="form.address" />
        <button type="submit">Submit</button>
    </form>
</template>

<script setup>
    import { reactive } from 'vue'
    import { router } from '@inertiajs/vue3'

    const form = reactive({
        first_name: null,
        last_name: null,
        email: null,
    })
    
    const {errors} = defineProps(['errors'])

    function submit() {
        router.post('/show', form)
    }
</script>

<style lang="scss" scoped>

</style>