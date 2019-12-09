
require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Admin from './layouts/Admin'
import Hello from './views/Hello'
import Home from './views/Home'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/admin',
            name: '/admin',
            component: Home
        },
        {
            path: '/admin/hello',
            name: '/admin/hello',
            component: Hello,
        },
    ],
});

const app = new Vue({
    el: '#admin',
    components: { Admin },
    router,
});