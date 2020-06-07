import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuetify from "../plugins/vuetify";
import VueTypedJs from "vue-typed-js";
import vueSmoothScroll from 'vue2-smooth-scroll';
import AOS from 'aos';
import 'aos/dist/aos.css';


import routes from './routes';

Vue.component('navbar', require('./components/Navbar.vue').default);

Vue.use(VueRouter);
Vue.use(VueTypedJs);
Vue.use(vueSmoothScroll);



const app = new Vue({
    created () {
        AOS.init()
      },
    vuetify: Vuetify,
    el: '#app',

    router: new VueRouter(routes),
});
