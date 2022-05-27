<template>
    <div>
        <header>
            <h1>CIAS</h1>
        </header>
        <nav>
            <router-link to="/">Home</router-link>
        </nav>
        <main>
            <router-view></router-view>
        </main>
        <footer>&copy; {{ fullYear }}</footer>
    </div>
</template>

<script>
export default {
    components: {},
    computed: {
        fullYear() {
            return new Date().getFullYear;
        },
    },
};
</script>
