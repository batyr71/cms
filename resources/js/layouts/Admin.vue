<template>
    <div>
        <h1>Admin Panel</h1>

        <p>
            <router-link :to="{ name: '/admin' }">Admin Home</router-link> |
            <router-link :to="{ name: '/admin/hello' }">Admin hello</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>