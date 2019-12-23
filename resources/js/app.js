
require('./bootstrap');

import VueRouter from 'vue-router';
import Vue from 'vue';
import Vuetify from 'vuetify';
import {routes} from './routes';

Vue.use(VueRouter);
Vue.use(Vuetify);

Vue.component('productes', require('./components/Productes.vue').default);

const router = new VueRouter({
    routes,
});

const app = new Vue({
    el: '#app',
    router
});
