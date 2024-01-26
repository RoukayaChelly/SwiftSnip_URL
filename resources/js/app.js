// resources/js/app.js

require('./bootstrap');

import Vue from 'vue';
import Hello from './components/Hello.vue';

Vue.component('hello', Hello);

const app = new Vue({
    el: '#app',
});