<template>
    <div class="container">
        <h1 class="mt-5">Example</h1>
        <button class="btn btn-primary" @click="showAlert">Show Alert</button>
    </div>
</template>

<script>
export default {
    methods: {
        showAlert() {
            alert('Example from Vue!');
        },
    },
};
</script>