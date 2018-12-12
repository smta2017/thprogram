

require('./bootstrap');

window.Vue = require('vue');

Vue.component('itemnames', require('./components/itemnames.vue'));
// Vue.component('itemnamepaginate', require('./components/itemnamepaginate.vue'));


//---------------------store---------------------
Vue.component('stores', require('./components/store/Read.vue'));
Vue.component('create', require('./components/store/Create.vue'));




const app = new Vue({
    el: '#app'
});
