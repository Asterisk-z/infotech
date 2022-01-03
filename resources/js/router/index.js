import { createRouter, createWebHistory } from 'vue-router'

import HelloWorld from '../components/HelloWorld.vue';
import Home from '../components/website/Home.vue';
import AboutUs from '../components/website/AboutUs.vue';
import Portfolio from '../components/website/Portfolio.vue';
import Team from '../components/website/Team.vue';
import Blog from '../components/website/Blog.vue';

const routes = [
    {
        path: '/',
        name: 'website.home',
        component: Home
    },
    {
        path: '/about-us',
        name: 'website.aboutus',
        component: AboutUs
    },
    {
        path: '/portfolio',
        name: 'website.portfolio',
        component: Portfolio
    },
    {
        path: '/team',
        name: 'website.team',
        component: Team
    },
    {
        path: '/blog',
        name: 'website.blog',
        component: Blog
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
