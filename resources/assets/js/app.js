/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter); // 如果在一个模块化工程中使用它，必须要通过 Vue.use() 明确地安装路由功能

// import VuePaginate from 'vue-paginate';
// Vue.use(VuePaginate);

import Paginate from 'vuejs-paginate'
Vue.component('paginate', Paginate)

import store from './store/';
import routes from './routes';

const router = new VueRouter({
    routes
});

var vm = new Vue({
    store,
    router,
}).$mount('#app');