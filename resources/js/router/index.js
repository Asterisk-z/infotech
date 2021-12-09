import { createRouter, createWebHistory } from 'vue-router'

import HelloWorld from '../components/HelloWorld.vue';
import Home from '../components/website/Home.vue';

const routes = [
    {
        path: '/',
        name: 'website.home',
        component: Home
    },
    {
        path: '/test',
        name: 'companies.index',
        component: HelloWorld
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
