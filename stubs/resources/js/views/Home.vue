<template>
    <div>
        <img src="../assets/logo.png" alt="Vue logo" class="mx-auto">
        <HelloWorld msg="Welcome to Your Vue.js App for Lumen"/>
    </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue';

export default {
    name: 'Home',
    components: {
        HelloWorld,
    }
}
</script>
