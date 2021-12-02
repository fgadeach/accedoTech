require('./bootstrap');

import Vue from 'vue'

import Holidays from "./components/Holidays";

new Vue({
    el: '#app',
    components: {
        Holidays
    }
})
