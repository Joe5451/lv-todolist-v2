require('./bootstrap');

// vue
import Vue from 'vue';
import VueRouter from 'vue-router';

// other js
import jquery from 'jquery';
// import Swiper, { Navigation, Pagination } from 'swiper';
// import 'swiper/css';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';

// views
import Home from './views/Home';
import TagList from './views/TagList';
// import Trash from './views/Trash';

// components
import Head from './components/Head';

// regist components
Vue.component('main-head', Head);

window.$ = jquery;
window.Vue = Vue;
// window.Swiper = Swiper;
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/lv-todolist-v2/public/home',
            name: 'home',
            component: Home,
        },
        {
            path: '/lv-todolist-v2/public/tag_list',
            name: 'tag_list',
            component: TagList,
        },
       
    ],
});

const app = new Vue({
    el: '#app',
    router,
});