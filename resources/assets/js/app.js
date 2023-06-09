/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import store from './store/index';
Vue.use(store);

import helper from './common/helper'
Vue.use(helper);
// import VueRouter from 'vue-router';

import { ModalPlugin } from 'bootstrap-vue'
Vue.use(ModalPlugin)

// Vue.use(VueRouter)
// const router = new VueRouter({
//     mode:'history'
// });

// import VueRouter from 'vue-router'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// Auth
Vue.component('auth-login', require('./components/pages/auth/Login.vue').default);

// Main
Vue.component('main-exclusive-product', require('./components/pages/main/ExclusiveProduct.vue').default);

Vue.component('main-ajax', require('./components/pages/ajax/Index.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store,
    // router
});
