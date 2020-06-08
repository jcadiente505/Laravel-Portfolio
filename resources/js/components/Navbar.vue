<template>
    <div class="container-fluid">
        <div class="navbar d-flex justify-content-between">
            <router-link :to="{ name: 'home'}" class="nav-title mx-3">Jake Cadiente</router-link>
            <svg ref="ham" class="ham hamRotate" viewBox="0 0 100 100" width="80" v-on:click="toggleMenu">
                <path
                    class="line top"
                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                <path
                    class="line middle"
                    d="m 30,50 h 40" />
                <path
                    class="line bottom"
                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
            </svg>
        </div>

        <div ref="menu" id="menu" class="">
            <nav class="main-nav">
                <ul>
                <li>
                    <a href="#aboutSection" v-smooth-scroll>
                    About
                    </a>
                </li>
                <li>
                    <a href="#projectSection" v-smooth-scroll>
                    Projects
                    </a>
                </li>
                
                <li>
                    <a href="#footer" v-smooth-scroll>
                    Socials
                    </a>
                </li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            toggleMenu() {
                this.$refs.ham.classList.toggle('active');
                this.$refs.menu.classList.toggle('open');
            }
        },
        mounted() {
            console.log('navbar mounted')
        }
    }
</script>