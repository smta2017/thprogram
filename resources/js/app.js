

require('./bootstrap');

window.Vue = require('vue');

Vue.component('itemnames', require('./components/itemnames.vue'));

const app = new Vue({
    el: '#app'
});
