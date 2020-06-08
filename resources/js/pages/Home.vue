<template>
    <div>
        <div class="container-fluid">
            <div class="landing">
                <div class="home-text-container">
                    <vue-typed-js 
                        :strings="['Hello my name is Jake']"
                        :showCursor='false'
                    >
                        <h1 class="typing text-center justify-content-center"></h1>
                    </vue-typed-js>
                    <span class="outward-line"></span>
                    <h2 class="sub-text text-center my-3">Full Stack Developer</h2>
                    <div class="arrow">
                        <a style="opacity: 0;" href="#aboutSection" v-smooth-scroll>About</a>
                    </div>
                </div>
            </div>
        </div>
        <svg width="0" height="0" display="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <symbol id="shape-offercarousel-background-shape-bottom" viewbox="0 0 1920 81.6">
                <path fill="#6200EA">
                    <animate attributeName="d" dur="5000ms" repeatCount="indefinite" keyTimes="0;.1;.25;.4;.6;.75;1" 
                    values="M0,.4v-1H1920V1.2C1732.6,45.2,1394.8,81,963.2,81,441,80.9,121.1,28.5,0,.4Z;
                            M0,.4v-1H1920V1.2C1622.43,15.74,1394.8,81,963.2,81,441,80.9,121.1,28.5,0,.4Z;
                            M0,.4v-1H1920V1.2C1474.91,0,1391.57,28.65,965.43,62.7,430.13,99.09,312.74,69.74,0,.4Z;
                            M0,.4v-1H1920V1.2c-445.09-1.2-558.84-4.92-1009.74,11C372.61,31.22,312.74,69.74,0,.4Z;
                            M0,.4v-1H1920V1.2c-104.65,73.23-372.3,80.5-945.17,46.23C425-.7,198.87,5.17,0,.4Z;
                            M0,.4v-1H1920V1.2c-313.61,72.06-502.61,80.5-954.57,61.5C427.92,40.09,340.91,0,0,.4Z;
                            M0,.4v-1H1920V1.2C1732.6,45.2,1394.8,81,963.2,81,441,80.9,121.1,28.5,0,.4Z" />
                </path>
            </symbol>
        </defs>
        </svg>
        <!-- Call SVG with <use> -->
        <svg class="background-shape-bottom svg-wave" width="100%" height="81.71px" aria-hidden="true">
            <use xlink:href="#shape-offercarousel-background-shape-bottom"></use>
        </svg>
        <intro></intro>
        <projects></projects>
        <svg width="0" height="0" display="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <symbol id="shape-offercarousel-background-shape-bottom-footer" viewbox="0 0 1920 81.6">
                <path fill="white">
                    <animate attributeName="d" dur="5000ms" repeatCount="indefinite" keyTimes="0;.1;.25;.4;.6;.75;1" 
                    values="M0,.4v-1H1920V1.2C1732.6,45.2,1394.8,81,963.2,81,441,80.9,121.1,28.5,0,.4Z;
                            M0,.4v-1H1920V1.2C1622.43,15.74,1394.8,81,963.2,81,441,80.9,121.1,28.5,0,.4Z;
                            M0,.4v-1H1920V1.2C1474.91,0,1391.57,28.65,965.43,62.7,430.13,99.09,312.74,69.74,0,.4Z;
                            M0,.4v-1H1920V1.2c-445.09-1.2-558.84-4.92-1009.74,11C372.61,31.22,312.74,69.74,0,.4Z;
                            M0,.4v-1H1920V1.2c-104.65,73.23-372.3,80.5-945.17,46.23C425-.7,198.87,5.17,0,.4Z;
                            M0,.4v-1H1920V1.2c-313.61,72.06-502.61,80.5-954.57,61.5C427.92,40.09,340.91,0,0,.4Z;
                            M0,.4v-1H1920V1.2C1732.6,45.2,1394.8,81,963.2,81,441,80.9,121.1,28.5,0,.4Z" />
                </path>
            </symbol>
        </defs>
        </svg>
        <!-- Call SVG with <use> -->
        <svg class="background-shape-bottom-footer svg-bottom-wave" width="100%" height="81.71px" aria-hidden="true">
            <use xlink:href="#shape-offercarousel-background-shape-bottom-footer"></use>
        </svg>
        <footer-section></footer-section>
    </div>
</template>

<script>
    import Intro from '../components/Intro';
    import Projects from '../components/Projects';
    import Footer from '../components/Footer';

    window.HTMLElement.prototype.scrollIntoView = function() {};

    export default {
        components: {
            'intro': Intro,
            'projects': Projects,
            'footer-section': Footer
        },
        mounted() {
            console.log('navbar mounted')
        }
    }
</script>