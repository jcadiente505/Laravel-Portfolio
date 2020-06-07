<template>
    <div class="intro-section">
        <div class="main-container">
            <div id="aboutSection" class="about-section">
                <div class="intro">
                    <h1 class="intro-title mt-5" data-aos="fade-down">A little about me</h1>
                    <span class="right-underline"></span>
                    <h4 style="color: white;" class="text-center mt-5 pt-5">
                        Passionate about writing beautiful, simple and clean UI/UX development, RESTful API development, OOP and server-side logic.
                        Able to adapt to challenges and learn new technologies. Strives to be the best I can on any project.
                    </h4>
                </div>
                <tools></tools>
            </div>
        </div>
    </div>
</template>

<script>

    import Tools from './Tools';
    export default {
        components: {
            'tools': Tools
        },
        mounted() {
            console.log('navbar mounted')
        }
    }
</script>